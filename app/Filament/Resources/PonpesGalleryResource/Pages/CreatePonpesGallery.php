<?php

namespace App\Filament\Resources\PonpesGalleryResource\Pages;

use App\Filament\Resources\PonpesGalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePonpesGallery extends CreateRecord
{
    protected static string $resource = PonpesGalleryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'ponpes';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
