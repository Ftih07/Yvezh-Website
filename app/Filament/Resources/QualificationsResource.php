<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QualificationsResource\Pages;
use App\Filament\Resources\QualificationsResource\RelationManagers;
use App\Models\Qualifications;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QualificationsResource extends Resource
{
    protected static ?string $model = Qualifications::class;

    public static function getNavigationBadge(): ?string
    {
        return Qualifications::count(); // Menampilkan jumlah total data booking
    }

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('_qualification_categories_id')
                    ->label('Qualification Categories')
                    ->relationship('qualificationcategories', 'name')
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->label('Qualification Name')
                    ->required(),

                Forms\Components\TextInput::make('place')
                    ->label('Place Name')
                    ->required(),

                Forms\Components\TextInput::make('date')
                    ->label('Qualification Date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('qualificationcategories.name')  // Nama relasi skilltype dan kolom name
                    ->label('Qualification Categories')           // Label untuk kolom
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('place')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('date')->searchable()->sortable(),
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
            'index' => Pages\ListQualifications::route('/'),
            'create' => Pages\CreateQualifications::route('/create'),
            'edit' => Pages\EditQualifications::route('/{record}/edit'),
        ];
    }
}
