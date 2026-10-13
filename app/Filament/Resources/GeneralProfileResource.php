<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Concerns\HasSchoolProfileSchema;
use App\Filament\Resources\GeneralProfileResource\Pages\EditGeneralProfile;
use App\Filament\Resources\GeneralProfileResource\Pages\ListGeneralProfiles;
use App\Models\SchoolProfile;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GeneralProfileResource extends Resource
{
    use HasSchoolProfileSchema;

    protected static ?string $model = SchoolProfile::class;

    protected static ?string $slug = 'general-profile';

    protected static ?int $navigationSort = 0;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-document-text';
    }

    public static function getNavigationLabel(): string
    {
        return 'Profil & Visi Misi Yayasan';
    }

    public static function getModelLabel(): string
    {
        return 'Profil Yayasan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Profil & Visi Misi Yayasan';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pusat Informasi & SPMB';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('division', 'general');
    }

    public static function form(Schema $schema): Schema
    {
        return static::getProfileFormSchema($schema, 'general');
    }

    public static function table(Table $table): Table
    {
        return static::getProfileTable($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGeneralProfiles::route('/'),
            'edit' => EditGeneralProfile::route('/{record}/edit'),
        ];
    }
}
