<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillsResource\Pages;
use App\Filament\Resources\SkillsResource\RelationManagers;
use App\Models\Skill;
use App\Models\Skills;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillsResource extends Resource
{
    protected static ?string $model = Skill::class;

    public static function getNavigationBadge(): ?string
    {
        return Skill::count(); // Menampilkan jumlah total data booking
    }

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('skilltype_id')
                    ->label('Type Skills')
                    ->relationship('skilltype', 'name')
                    ->required(),

                Forms\Components\FileUpload::make('icon')
                    ->label('icon')
                    ->directory('icons'),

                Forms\Components\TextInput::make('name')
                    ->label('Skills Name')
                    ->required(),

                Forms\Components\TextInput::make('skill_level')
                    ->label('Skills Level'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('skilltype.name')
                    ->label('Skill Type')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('icon')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('skill_level')->searchable()->sortable(),
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkills::route('/create'),
            'edit' => Pages\EditSkills::route('/{record}/edit'),
        ];
    }
}
