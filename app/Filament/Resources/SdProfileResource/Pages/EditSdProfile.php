<?php

namespace App\Filament\Resources\SdProfileResource\Pages;

use App\Filament\Resources\SdProfileResource;
use Filament\Resources\Pages\EditRecord;

class EditSdProfile extends EditRecord
{
    protected static string $resource = SdProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
