<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Concerns\HasSchoolProfileSchema;
use App\Filament\Resources\KbtkProfileResource\Pages\EditKbtkProfile;
use App\Filament\Resources\KbtkProfileResource\Pages\ListKbtkProfiles;
use App\Models\SchoolProfile;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class KbtkProfileResource extends Resource
{
    use HasSchoolProfileSchema;

    protected static ?string $model = SchoolProfile::class;

    protected static ?string $slug = 'kbtk-profile';

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
        return 'Profil KB-TK';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Profil & Visi Misi KB-TK';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'KB & TK';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('division', 'kbtk');
    }

    public static function form(Schema $schema): Schema
    {
        return static::getProfileFormSchema($schema, 'kbtk');
    }

    public static function table(Table $table): Table
    {
        return static::getProfileTable($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKbtkProfiles::route('/'),
            'edit' => EditKbtkProfile::route('/{record}/edit'),
        ];
    }
}
