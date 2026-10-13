<?php

namespace App\Filament\Resources\KbtkProfileResource\Pages;

use App\Filament\Resources\KbtkProfileResource;
use Filament\Resources\Pages\ListRecords;

class ListKbtkProfiles extends ListRecords
{
    protected static string $resource = KbtkProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
