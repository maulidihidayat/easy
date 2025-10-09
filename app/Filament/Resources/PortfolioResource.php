<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Portfolio';

    protected static ?string $modelLabel = 'Portfolio Item';

    protected static ?string $pluralModelLabel = 'Portfolio';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
        Forms\Components\TextInput::make('Title')::make('title')
            ->label('Title')
            ->required()
            ->maxLength(255),

        Forms\Components\TextInput::make('Category')::make('category')
            ->label('Category')
            ->datalist([
                'Prewedding',
                'Wedding',
                'Graduation',
                'Birthday',
            ])
            ->maxLength(100),

        Forms\Components\FileUpload::make('image_path')
            ->label('Image')
            ->image()
            ->directory('portfolio')
            ->visibility('public')
            ->disk('public')
            ->imageEditor(),

        Forms\Components\Textarea::make('description')
            ->label('Description')
            ->rows(4),

        Forms\Components\Select::make('is_published')
    ->label('Publication Status')
    ->options([
        1 => 'Published',
        0 => 'Draft',
    ])
    ->default(1)
    ->required(),

    ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')->label('Image')->circular()->disk('public'),
                Tables\Columns\TextColumn::make('title')->label('Title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category')->label('Category')->badge()->sortable(),
                Tables\Columns\IconColumn::make('is_published')->label('Published')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Prewedding' => 'Prewedding',
                        'Wedding' => 'Wedding',
                        'Graduation' => 'Graduation',
                        'Brithday' => 'Brithday',
                    ]),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published')
                    ->boolean(),
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
