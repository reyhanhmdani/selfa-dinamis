<?php

namespace App\Filament\Resources\SdGalleryResource\Pages;

use App\Filament\Resources\SdGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSdGalleries extends ListRecords
{
    protected static string $resource = SdGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
