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

    // ✅ Tambahkan auto-refresh agar widget tidak statis
    protected static ?int $pollingInterval = 10; // refresh setiap 10 detik

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
        // ✅ Query dinamis: ambil 10 booking terbaru yang terus diperbarui
        return Booking::query()
            ->orderByDesc('created_at')
            ->limit(10);
    }
}
