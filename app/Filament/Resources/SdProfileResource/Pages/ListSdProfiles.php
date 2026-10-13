<?php

namespace App\Filament\Resources\SdProfileResource\Pages;

use App\Filament\Resources\SdProfileResource;
use Filament\Resources\Pages\ListRecords;

class ListSdProfiles extends ListRecords
{
    protected static string $resource = SdProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
