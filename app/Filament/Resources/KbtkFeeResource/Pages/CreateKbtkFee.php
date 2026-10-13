<?php

namespace App\Filament\Resources\KbtkFeeResource\Pages;

use App\Filament\Resources\KbtkFeeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKbtkFee extends CreateRecord
{
    protected static string $resource = KbtkFeeResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['program_type'] = 'kbtk';
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
