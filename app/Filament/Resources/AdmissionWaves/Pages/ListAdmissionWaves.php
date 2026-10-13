<?php

namespace App\Filament\Resources\AdmissionWaves\Pages;

use App\Filament\Resources\AdmissionWaves\AdmissionWaveResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdmissionWaves extends ListRecords
{
    protected static string $resource = AdmissionWaveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
