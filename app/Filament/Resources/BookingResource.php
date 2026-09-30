<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use App\Services\WhatsAppService;
use Illuminate\Database\Eloquent\Builder;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationLabel = 'Bookings';

    protected static ?string $modelLabel = 'Booking';

    protected static ?string $pluralModelLabel = 'Bookings';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
                Forms\Components\TextInput::make('full_name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone')
                    ->tel()
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('service_type')
                    ->label('Service Type')
                    ->required()
                    ->options([
                        'Prewedding Photography' => 'Prewedding Photography',
                        'Wedding Photography' => 'Wedding Photography',
                        'Portrait Photography' => 'Portrait Photography',
                        'Event Photography' => 'Event Photography',
                        'Family Photography' => 'Family Photography',
                        'Custom Package' => 'Custom Package',
                    ])
                    ->native(false),
                Forms\Components\DatePicker::make('event_date')
                    ->label('Event Date')
                    ->native(false),
                Forms\Components\TextInput::make('location')
                    ->label('Location')
                    ->maxLength(255),
                Forms\Components\Textarea::make('details')
                    ->label('Details')
                    ->rows(4),

                Forms\Components\TextInput::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->maxLength(100),
                Forms\Components\Select::make('payment_status')
                    ->label('Status Pembayaran')
                    ->default('pending')
                    ->options([
                        'pending' => 'Pending (Menunggu Verifikasi)',
                        'paid' => 'Paid (Lunas)',
                        'refunded' => 'Refunded (Dana Dikembalikan)',
                        'unpaid' => 'Unpaid (Belum Bayar)',
                        'rejected' => 'Rejected (Ditolak)',
                    ])
                    ->native(false),
                Forms\Components\TextInput::make('amount')
                    ->label('Nominal / Total')
                    ->numeric()
                    ->prefix('Rp'),
                Forms\Components\FileUpload::make('payment_proof')
                    ->label('Bukti Pembayaran')
                    ->disk('public')
                    ->directory('payment_proofs')
                    ->image()
                    ->openable()
                    ->downloadable(),

                Forms\Components\Textarea::make('admin_notes')
                    ->label('Admin Notes / Catatan Refund')
                    ->rows(3),
                Forms\Components\DateTimePicker::make('approved_at')
                    ->label('Approved At')
                    ->native(false)
                    ->seconds(false),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->default('pending')
                    ->options([
                        'pending' => 'Pending (Menunggu Konfirmasi)',
                        'approved' => 'Approved (Disetujui)',
                        'cancelled' => 'Cancelled (Dibatalkan)',
                        'rejected' => 'Rejected (Ditolak)',
                    ])
                    ->native(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nama Klien')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('No. WhatsApp')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->label('Layanan')
                    ->badge()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Tgl Acara')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Nominal')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Metode Bayar')
                    ->badge()
                    ->color('gray')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->label('Status Bayar')
                    ->badge()
                    ->color(fn(string|null $state): string => match ($state) {
                        'paid' => 'success',
                        'refunded' => 'info',
                        'rejected' => 'danger',
                        'unpaid' => 'gray',
                        default => 'warning',
                    }),
                Tables\Columns\ImageColumn::make('payment_proof')
                    ->label('Bukti')
                    ->disk('public')
                    ->square()
                    ->size(40),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status Booking')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'approved' => 'success',
                        'cancelled' => 'danger',
                        'rejected' => 'gray',
                        default => 'warning',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tgl Booking')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('period')
                    ->label('Rekap Periode')
                    ->options([
                        'this_month' => 'Bulan Ini',
                        'last_month' => 'Bulan Lalu (1 Bulan Terakhir)',
                        'two_months' => 'Rekap 2 Bulan Terakhir',
                    ])
                    ->query(function (Builder $query, array $data) {
                        $val = $data['value'] ?? null;
                        if ($val === 'this_month') {
                            $query->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()]);
                        } elseif ($val === 'last_month') {
                            $query->whereBetween('created_at', [now()->subMonth()->startOfMonth(), now()->subMonth()->endOfMonth()]);
                        } elseif ($val === 'two_months') {
                            $query->whereBetween('created_at', [now()->subMonths(1)->startOfMonth(), now()->endOfMonth()]);
                        }
                    }),
                SelectFilter::make('payment_status')
                    ->label('Status Pembayaran')
                    ->options([
                        'paid' => 'Paid (Lunas)',
                        'pending' => 'Pending (Menunggu Verifikasi)',
                        'refunded' => 'Refunded (Dana Dikembalikan)',
                        'unpaid' => 'Unpaid (Belum Bayar)',
                        'rejected' => 'Rejected (Ditolak)',
                    ]),
                SelectFilter::make('status')
                    ->label('Status Booking')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved (Disetujui)',
                        'cancelled' => 'Cancelled (Dibatalkan)',
                        'rejected' => 'Rejected (Ditolak)',
                    ]),
                SelectFilter::make('service_type')
                    ->label('Jenis Layanan')
                    ->options([
                        'Prewedding Photography' => 'Prewedding Photography',
                        'Wedding Photography' => 'Wedding Photography',
                        'Portrait Photography' => 'Portrait Photography',
                        'Event Photography' => 'Event Photography',
                        'Family Photography' => 'Family Photography',
                        'Custom Package' => 'Custom Package',
                    ]),
            ])
            ->actions([
                Action::make('approve')
                    ->label('Approve & WA')
                    ->icon('heroicon-o-check-badge')
                    ->color('success')
                    ->requiresConfirmation()
                    ->modalHeading('Konfirmasi & Setujui Booking')
                    ->modalDescription('Apakah Anda yakin ingin menyetujui booking ini dan menandai pembayaran sebagai lunas? Setelah disetujui, Anda akan diarahkan ke WhatsApp konfirmasi klien.')
                    ->action(function (Booking $record) {
                        $record->update([
                            'status' => 'approved',
                            'payment_status' => 'paid',
                            'approved_at' => now(),
                        ]);

                        Notification::make()
                            ->title('Booking Disetujui!')
                            ->body('Status booking #' . $record->id . ' disetujui & pembayaran lunas.')
                            ->success()
                            ->send();

                        $url = app(WhatsAppService::class)->generateCustomerApprovalUrl($record);
                        return redirect()->away($url);
                    })
                    ->visible(fn(Booking $record) => $record->status !== 'approved'),

                Action::make('cancel_booking')
                    ->label('Batalkan')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->form([
                        Forms\Components\Select::make('payment_status')
                            ->label('Status Pembayaran / Refund')
                            ->options([
                                'refunded' => 'Refunded (Dana Dikembalikan ke Klien)',
                                'unpaid' => 'Unpaid / No Refund (Tanpa Refund)',
                                'rejected' => 'Rejected (Pembayaran Ditolak)',
                            ])
                            ->default('refunded')
                            ->required(),
                        Forms\Components\Textarea::make('admin_notes')
                            ->label('Alasan Pembatalan & Catatan Refund')
                            ->placeholder('Contoh: Pelanggan mengajukan pembatalan karena jadwal bentrok / Refund DP Rp 300.000 sudah ditransfer balik.')
                            ->required(),
                    ])
                    ->action(function (Booking $record, array $data) {
                        $record->update([
                            'status' => 'cancelled',
                            'payment_status' => $data['payment_status'],
                            'admin_notes' => $data['admin_notes'],
                        ]);

                        Notification::make()
                            ->title('Booking Dibatalkan')
                            ->body('Booking #' . $record->id . ' telah dibatalkan.')
                            ->warning()
                            ->send();

                        $url = app(WhatsAppService::class)->generateCustomerCancellationUrl($record, $data['admin_notes']);
                        return redirect()->away($url);
                    })
                    ->visible(fn(Booking $record) => $record->status !== 'cancelled'),

                Action::make('chat_wa')
                    ->label('WA')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->color('info')
                    ->url(fn(Booking $record) => app(WhatsAppService::class)->generateCustomerChatUrl($record), shouldOpenInNewTab: true),

                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }
}
