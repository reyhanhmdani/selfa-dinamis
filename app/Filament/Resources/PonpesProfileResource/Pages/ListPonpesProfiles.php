<?php

namespace App\Filament\Resources\PonpesProfileResource\Pages;

use App\Filament\Resources\PonpesProfileResource;
use Filament\Resources\Pages\ListRecords;

class ListPonpesProfiles extends ListRecords
{
    protected static string $resource = PonpesProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
