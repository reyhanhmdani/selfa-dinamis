<?php

namespace App\Filament\Resources\AdmissionFees;

use App\Filament\Resources\AdmissionFees\Pages\CreateAdmissionFee;
use App\Filament\Resources\AdmissionFees\Pages\EditAdmissionFee;
use App\Filament\Resources\AdmissionFees\Pages\ListAdmissionFees;
use App\Filament\Resources\AdmissionFees\Schemas\AdmissionFeeForm;
use App\Filament\Resources\AdmissionFees\Tables\AdmissionFeesTable;
use App\Models\AdmissionFee;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AdmissionFeeResource extends Resource
{
    protected static ?string $model = AdmissionFee::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?int $navigationSort = 2;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-banknotes';
    }

    public static function getNavigationLabel(): string
    {
        return 'Biaya Pendaftaran';
    }

    public static function getModelLabel(): string
    {
        return 'Biaya Program';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Biaya Program';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'SPMB / PPDB';
    }

    public static function form(Schema $schema): Schema
    {
        return AdmissionFeeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdmissionFeesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdmissionFees::route('/'),
            'create' => CreateAdmissionFee::route('/create'),
            'edit' => EditAdmissionFee::route('/{record}/edit'),
        ];
    }
}
