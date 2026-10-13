<?php

namespace App\Filament\Resources\AdmissionWaves;

use App\Filament\Resources\AdmissionWaves\Pages\CreateAdmissionWave;
use App\Filament\Resources\AdmissionWaves\Pages\EditAdmissionWave;
use App\Filament\Resources\AdmissionWaves\Pages\ListAdmissionWaves;
use App\Filament\Resources\AdmissionWaves\Schemas\AdmissionWaveForm;
use App\Filament\Resources\AdmissionWaves\Tables\AdmissionWavesTable;
use App\Models\AdmissionWave;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AdmissionWaveResource extends Resource
{
    protected static ?string $model = AdmissionWave::class;

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-calendar-days';
    }

    public static function getNavigationLabel(): string
    {
        return 'Gelombang PPDB';
    }

    public static function getModelLabel(): string
    {
        return 'Gelombang PPDB';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Gelombang PPDB';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'SPMB / PPDB';
    }

    public static function form(Schema $schema): Schema
    {
        return AdmissionWaveForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdmissionWavesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdmissionWaves::route('/'),
            'create' => CreateAdmissionWave::route('/create'),
            'edit' => EditAdmissionWave::route('/{record}/edit'),
        ];
    }
}
