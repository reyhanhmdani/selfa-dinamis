<?php

namespace App\Filament\Resources\PonpesGalleryResource\Pages;

use App\Filament\Resources\PonpesGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPonpesGallery extends EditRecord
{
    protected static string $resource = PonpesGalleryResource::class;

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
