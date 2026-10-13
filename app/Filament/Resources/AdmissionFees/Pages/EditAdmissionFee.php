<?php

namespace App\Filament\Resources\AdmissionFees\Pages;

use App\Filament\Resources\AdmissionFees\AdmissionFeeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdmissionFee extends EditRecord
{
    protected static string $resource = AdmissionFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
