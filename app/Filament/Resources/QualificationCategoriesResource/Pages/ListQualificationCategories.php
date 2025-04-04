<?php

namespace App\Filament\Resources\QualificationCategoriesResource\Pages;

use App\Filament\Resources\QualificationCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualificationCategories extends ListRecords
{
    protected static string $resource = QualificationCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
