<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\View;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    // protected static UnitEnum | string | null $navigationGroup = 'Customer Interactions';

    protected static ?string $navigationLabel = 'Feedback';

    protected static ?string $modelLabel = 'Feedback';

    protected static ?string $pluralModelLabel = 'Feedback';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Schema::section('Customer Information')->schema([
                Schema::textInput('name')->required()->maxLength(255)->label('Name'),
                Schema::textInput('email')->email()->maxLength(255)->label('Email'),
            ])->columns(2),

            Schema::section('Feedback')->schema([
                Schema::select('rating')->required()->options([
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ])->label('Rating')->native(false),
                Schema::textarea('message')->required()->rows(4)->label('Message'),
                Schema::fileUpload('photo_path')->image()->directory('feedback')->visibility('public')->label('Photo'),
            ]),

            Schema::section('Admin')->schema([
                Schema::select('status')->required()->options([
                    'pending' => 'Pending Review',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'featured' => 'Featured',
                ])->default('pending')->label('Status')->native(false),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo_path')->circular()->label('Photo'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Name'),
                Tables\Columns\TextColumn::make('email')->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('rating')->badge()->label('Rating'),
                Tables\Columns\TextColumn::make('message')->limit(50)->label('Message'),
                Tables\Columns\TextColumn::make('status')->badge()->label('Status'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Created'),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'pending' => 'Pending Review',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'featured' => 'Featured',
                ]),
                SelectFilter::make('rating')->options([
                    1 => '1',
                    2 => '2',
                    3 => '3',                   
                    4 => '4',
                    5 => '5',
                ]),
            ])

            ->actions([
                // ViewAction::make(),
                // EditAction::make(),
                // DeleteAction::make(),
                EditAction::make(),
                ViewAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'view' => Pages\ViewFeedback::route('/{record}'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }
}
