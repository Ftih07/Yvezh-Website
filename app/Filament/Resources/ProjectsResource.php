<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectsResource\Pages;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use App\Models\Projects;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectsResource extends Resource
{
    protected static ?string $model = Projects::class;

    public static function getNavigationBadge(): ?string
    {
        return Projects::count(); // Menampilkan jumlah total data booking
    }

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\FileUpload::make('image_project')
                    ->label('Image Project')
                    ->directory('project'),

                Forms\Components\TextInput::make('role')
                    ->label('Role in Projects')
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->label('Name Projects')
                    ->required(),

                Forms\Components\TextInput::make('tech')
                    ->label('Tech Projects')
                    ->required(),

                Forms\Components\TextInput::make('demo_link')
                    ->label('Link Demo Projects')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('image_project')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('role')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('tech')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('demo_link')->searchable()->sortable(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }
}
