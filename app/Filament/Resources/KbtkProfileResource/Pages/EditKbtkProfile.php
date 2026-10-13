<?php

namespace App\Filament\Resources\KbtkProfileResource\Pages;

use App\Filament\Resources\KbtkProfileResource;
use Filament\Resources\Pages\EditRecord;

class EditKbtkProfile extends EditRecord
{
    protected static string $resource = KbtkProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
