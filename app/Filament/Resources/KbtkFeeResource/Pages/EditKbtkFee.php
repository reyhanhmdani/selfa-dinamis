<?php

namespace App\Filament\Resources\KbtkFeeResource\Pages;

use App\Filament\Resources\KbtkFeeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKbtkFee extends EditRecord
{
    protected static string $resource = KbtkFeeResource::class;

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
