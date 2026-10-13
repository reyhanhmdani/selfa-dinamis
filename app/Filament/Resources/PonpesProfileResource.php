<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Concerns\HasSchoolProfileSchema;
use App\Filament\Resources\PonpesProfileResource\Pages\EditPonpesProfile;
use App\Filament\Resources\PonpesProfileResource\Pages\ListPonpesProfiles;
use App\Models\SchoolProfile;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PonpesProfileResource extends Resource
{
    use HasSchoolProfileSchema;

    protected static ?string $model = SchoolProfile::class;

    protected static ?string $slug = 'ponpes-profile';

    protected static ?int $navigationSort = 0;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-document-text';
    }

    public static function getNavigationLabel(): string
    {
        return 'Profil & Visi Misi';
    }

    public static function getModelLabel(): string
    {
        return 'Profil Ponpes';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Profil & Visi Misi Ponpes';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pondok Pesantren';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('division', 'ponpes');
    }

    public static function form(Schema $schema): Schema
    {
        return static::getProfileFormSchema($schema, 'ponpes');
    }

    public static function table(Table $table): Table
    {
        return static::getProfileTable($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPonpesProfiles::route('/'),
            'edit' => EditPonpesProfile::route('/{record}/edit'),
        ];
    }
}
