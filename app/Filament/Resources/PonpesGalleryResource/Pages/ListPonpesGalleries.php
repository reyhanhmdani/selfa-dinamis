<?php

namespace App\Filament\Resources\PonpesGalleryResource\Pages;

use App\Filament\Resources\PonpesGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPonpesGalleries extends ListRecords
{
    protected static string $resource = PonpesGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
