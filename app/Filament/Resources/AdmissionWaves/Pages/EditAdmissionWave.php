<?php

namespace App\Filament\Resources\AdmissionWaves\Pages;

use App\Filament\Resources\AdmissionWaves\AdmissionWaveResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdmissionWave extends EditRecord
{
    protected static string $resource = AdmissionWaveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
