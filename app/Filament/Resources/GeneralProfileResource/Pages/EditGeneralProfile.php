<?php

namespace App\Filament\Resources\GeneralProfileResource\Pages;

use App\Filament\Resources\GeneralProfileResource;
use Filament\Resources\Pages\EditRecord;

class EditGeneralProfile extends EditRecord
{
    protected static string $resource = GeneralProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
