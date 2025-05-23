<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QualificationCategoriesResource\Pages;
use App\Filament\Resources\QualificationCategoriesResource\RelationManagers;
use App\Models\QualificationCategories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QualificationCategoriesResource extends Resource
{
    protected static ?string $model = QualificationCategories::class;

    public static function getNavigationBadge(): ?string
    {
        return QualificationCategories::count(); // Menampilkan jumlah total data booking
    }

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->label('Qualification Categories')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQualificationCategories::route('/'),
            'create' => Pages\CreateQualificationCategories::route('/create'),
            'edit' => Pages\EditQualificationCategories::route('/{record}/edit'),
        ];
    }
}
