<?php

namespace App\Filament\Resources\SdFeeResource\Pages;

use App\Filament\Resources\SdFeeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSdFee extends CreateRecord
{
    protected static string $resource = SdFeeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['program_type'] = 'sd';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
