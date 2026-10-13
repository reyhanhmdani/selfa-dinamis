<?php

namespace App\Filament\Resources\SdGalleryResource\Pages;

use App\Filament\Resources\SdGalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSdGallery extends CreateRecord
{
    protected static string $resource = SdGalleryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'sd';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
