<?php

namespace App\Filament\Resources\KbtkGalleryResource\Pages;

use App\Filament\Resources\KbtkGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKbtkGallery extends EditRecord
{
    protected static string $resource = KbtkGalleryResource::class;

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
