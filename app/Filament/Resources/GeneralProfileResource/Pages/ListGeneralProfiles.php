<?php

namespace App\Filament\Resources\GeneralProfileResource\Pages;

use App\Filament\Resources\GeneralProfileResource;
use Filament\Resources\Pages\ListRecords;

class ListGeneralProfiles extends ListRecords
{
    protected static string $resource = GeneralProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
