<?php

namespace App\Filament\Resources\KbtkGalleryResource\Pages;

use App\Filament\Resources\KbtkGalleryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKbtkGallery extends CreateRecord
{
    protected static string $resource = KbtkGalleryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'kbtk';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
