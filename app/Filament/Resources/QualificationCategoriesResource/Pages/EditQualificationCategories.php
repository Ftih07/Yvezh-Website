<?php

namespace App\Filament\Resources\QualificationCategoriesResource\Pages;

use App\Filament\Resources\QualificationCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQualificationCategories extends EditRecord
{
    protected static string $resource = QualificationCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
