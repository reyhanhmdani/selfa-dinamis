<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Concerns\HasSchoolProfileSchema;
use App\Filament\Resources\SdProfileResource\Pages\EditSdProfile;
use App\Filament\Resources\SdProfileResource\Pages\ListSdProfiles;
use App\Models\SchoolProfile;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SdProfileResource extends Resource
{
    use HasSchoolProfileSchema;

    protected static ?string $model = SchoolProfile::class;

    protected static ?string $slug = 'sd-profile';

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
        return 'Profil SD Alam';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Profil & Visi Misi SD Alam';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'SD Alam';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('division', 'sd');
    }

    public static function form(Schema $schema): Schema
    {
        return static::getProfileFormSchema($schema, 'sd');
    }

    public static function table(Table $table): Table
    {
        return static::getProfileTable($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSdProfiles::route('/'),
            'edit' => EditSdProfile::route('/{record}/edit'),
        ];
    }
}
