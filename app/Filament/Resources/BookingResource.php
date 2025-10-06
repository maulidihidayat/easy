<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
 
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationLabel = 'Bookings';
    protected static ?string $modelLabel = 'Booking';
    protected static ?string $pluralModelLabel = 'Bookings';
    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schema::section('Customer Information')->schema([
                Schema::textInput('full_name')->required()->maxLength(255)->label('Full Name'),
                Schema::textInput('phone')->required()->maxLength(20)->label('Phone'),
                Schema::textInput('email')->email()->maxLength(255)->label('Email'),
            ])->columns(2),

            Schema::section('Event Details')->schema([
                Schema::select('service_type')
                    ->required()
                    ->options([
                        'Prewedding Photography' => 'Prewedding Photography',
                        'Wedding Photography' => 'Wedding Photography',
                        'Portrait Photography' => 'Portrait Photography',
                        'Event Photography' => 'Event Photography',
                        'Family Photography' => 'Family Photography',
                        'Custom Package' => 'Custom Package',
                    ])->label('Service Type'),
                Schema::datePicker('event_date')->label('Event Date')->required(),
                Schema::textInput('location')->maxLength(255)->label('Location'),
                Schema::textarea('details')->rows(4)->label('Details'),
            ])->columns(2),

            Schema::section('Admin')->schema([
                Schema::select('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'completed' => 'Completed',
                ])->default('pending')->label('Status'),
                Schema::dateTimePicker('approved_at')->label('Approved At'),
                Schema::textarea('admin_notes')->rows(3)->label('Admin Notes'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')->sortable()->searchable()->label('Name'),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('service_type')->badge()->label('Service'),
                Tables\Columns\TextColumn::make('event_date')->date()->sortable()->label('Date'),
                Tables\Columns\TextColumn::make('status')->badge()->label('Status'),
                Tables\Columns\TextColumn::make('approved_at')->dateTime()->label('Approved At'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'completed' => 'Completed',
                ]),
                SelectFilter::make('service_type')->options([
                    'Prewedding Photography' => 'Prewedding Photography',
                    'Wedding Photography' => 'Wedding Photography',
                    'Portrait Photography' => 'Portrait Photography',
                    'Event Photography' => 'Event Photography',
                    'Family Photography' => 'Family Photography',
                    'Custom Package' => 'Custom Package',
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
