<?php

namespace App\Filament\Resources\SdFeeResource\Pages;

use App\Filament\Resources\SdFeeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSdFee extends EditRecord
{
    protected static string $resource = SdFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
