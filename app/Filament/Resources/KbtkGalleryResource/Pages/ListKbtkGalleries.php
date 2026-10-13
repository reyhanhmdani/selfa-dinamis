<?php

namespace App\Filament\Resources\KbtkGalleryResource\Pages;

use App\Filament\Resources\KbtkGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKbtkGalleries extends ListRecords
{
    protected static string $resource = KbtkGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
