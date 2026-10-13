<?php

namespace App\Filament\Resources\PonpesProfileResource\Pages;

use App\Filament\Resources\PonpesProfileResource;
use Filament\Resources\Pages\EditRecord;

class EditPonpesProfile extends EditRecord
{
    protected static string $resource = PonpesProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
