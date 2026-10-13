<?php

namespace App\Filament\Resources\PonpesFeeResource\Pages;

use App\Filament\Resources\PonpesFeeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPonpesFees extends ListRecords
{
    protected static string $resource = PonpesFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
