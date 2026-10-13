<?php

namespace App\Filament\Resources\SdGalleryResource\Pages;

use App\Filament\Resources\SdGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSdGallery extends EditRecord
{
    protected static string $resource = SdGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
