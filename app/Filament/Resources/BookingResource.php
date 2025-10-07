<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
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
            Schema::section('Customer Information')->schema([
                Schema::textInput('full_name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),
                Schema::textInput('phone')
                    ->label('Phone')
                    ->tel()
                    ->required()
                    ->maxLength(30),
                Schema::textInput('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
            ])->columns(3),

            Schema::section('Booking Details')->schema([
                Schema::select('service_type')
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
                Schema::datePicker('event_date')
                    ->label('Event Date')
                    ->native(false),
                Schema::textInput('location')
                    ->label('Location')
                    ->maxLength(255),
                Schema::textarea('details')
                    ->label('Details')
                    ->rows(4),
            ])->columns(2),

            Schema::section('Admin')->schema([
                Schema::select('status')
                    ->label('Status')
                    ->default('pending')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])
                    ->native(false),
                Schema::dateTimePicker('approved_at')
                    ->label('Approved At')
                    ->native(false)
                    ->seconds(false),
                Schema::textarea('admin_notes')
                    ->label('Admin Notes')
                    ->rows(3),
            ])->columns(2)->collapsible(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->label('Service')
                    ->badge()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Event Date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        default => 'warning',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),
                SelectFilter::make('service_type')
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
