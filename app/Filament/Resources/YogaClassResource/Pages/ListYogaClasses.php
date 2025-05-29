<?php

namespace App\Filament\Resources\YogaClassResource\Pages;

use App\Filament\Resources\YogaClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYogaClasses extends ListRecords
{
    protected static string $resource = YogaClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
