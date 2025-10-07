<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentBookingsWidget extends BaseWidget
{
    protected static ?string $heading = 'Recent Bookings';

    protected int | string | array $columnSpan = 'full';

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->query($this->getQuery())
            ->defaultPaginationPageOption(5)
            ->columns([
                Tables\Columns\TextColumn::make('full_name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('service_type')->label('Service')->badge(),
                Tables\Columns\TextColumn::make('event_date')->label('Date')->date(),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->since(),
            ]);
    }

    protected function getQuery(): Builder
    {
        return Booking::query()->latest();
    }
}
