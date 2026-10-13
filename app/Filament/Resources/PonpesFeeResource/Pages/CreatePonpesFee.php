<?php

namespace App\Filament\Resources\PonpesFeeResource\Pages;

use App\Filament\Resources\PonpesFeeResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePonpesFee extends CreateRecord
{
    protected static string $resource = PonpesFeeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['program_type'] = 'ponpes';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
