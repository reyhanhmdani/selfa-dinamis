<?php

namespace App\Filament\Resources\SdFeeResource\Pages;

use App\Filament\Resources\SdFeeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSdFees extends ListRecords
{
    protected static string $resource = SdFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
