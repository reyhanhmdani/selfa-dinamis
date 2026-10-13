<?php

namespace App\Filament\Resources\KbtkFeeResource\Pages;

use App\Filament\Resources\KbtkFeeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKbtkFees extends ListRecords
{
    protected static string $resource = KbtkFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
