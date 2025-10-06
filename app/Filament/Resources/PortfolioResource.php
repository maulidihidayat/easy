<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationLabel = 'Portfolio';
    protected static ?string $modelLabel = 'Portfolio Item';
    protected static ?string $pluralModelLabel = 'Portfolio';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schema::section('Portfolio Information')->schema([
                Schema::textInput('title')->required()->maxLength(255)->label('Title'),
                Schema::select('category')->required()->options([
                    'wedding' => 'Wedding',
                    'portrait' => 'Portrait',
                    'event' => 'Event',
                    'commercial' => 'Commercial',
                    'lifestyle' => 'Lifestyle',
                    'nature' => 'Nature',
                    'street' => 'Street Photography',
                    'other' => 'Other',
                ])->label('Category'),
                Schema::textarea('description')->rows(4)->label('Description'),
            ])->columns(2),

            Schema::section('Media & Settings')->schema([
                Schema::fileUpload('image_path')->image()->directory('portfolio')->visibility('public')->required()->label('Image'),
                Schema::toggle('is_published')->default(true)->label('Published'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')->square()->extraAttributes(['class' => 'text-lg'])->label('Image'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->label('Title'),
                Tables\Columns\TextColumn::make('category')->badge()->label('Category'),
                Tables\Columns\IconColumn::make('is_published')->boolean()->label('Published'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Created'),
            ])
            ->filters([
                SelectFilter::make('category')->options([
                    'wedding' => 'Wedding',
                    'portrait' => 'Portrait',
                    'event' => 'Event',
                    'commercial' => 'Commercial',
                    'lifestyle' => 'Lifestyle',
                    'nature' => 'Nature',
                    'street' => 'Street Photography',
                    'other' => 'Other',
                ]),
                Tables\Filters\TernaryFilter::make('is_published')->label('Published'),
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
            'index' => Pages\ListPortfolio::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'view' => Pages\ViewPortfolio::route('/{record}'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }
}
