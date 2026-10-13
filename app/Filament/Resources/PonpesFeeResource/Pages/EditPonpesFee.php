<?php

namespace App\Filament\Resources\PonpesFeeResource\Pages;

use App\Filament\Resources\PonpesFeeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPonpesFee extends EditRecord
{
    protected static string $resource = PonpesFeeResource::class;

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
