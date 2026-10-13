<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KbtkGalleryResource\Pages\CreateKbtkGallery;
use App\Filament\Resources\KbtkGalleryResource\Pages\EditKbtkGallery;
use App\Filament\Resources\KbtkGalleryResource\Pages\ListKbtkGalleries;
use App\Models\Gallery;
use App\Services\ImageOptimizer;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class KbtkGalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $slug = 'kbtk-galleries';

    protected static ?int $navigationSort = 2;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-photo';
    }

    public static function getNavigationLabel(): string
    {
        return 'Galeri KB-TK';
    }

    public static function getModelLabel(): string
    {
        return 'Foto KB-TK';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Galeri KB-TK';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'KB & TK';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('type', 'kbtk');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('type')
                    ->default('kbtk'),

                Section::make('Detail Foto Galeri KB & TK')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul / Keterangan Foto')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        FileUpload::make('image_path')
                            ->label('File Foto')
                            ->image()
                            ->disk('public')
                            ->directory('galleries')
                            ->imageEditor()
                            ->required()
                            ->columnSpanFull()
                            ->saveUploadedFileUsing(function ($file) {
                                return ImageOptimizer::optimize(
                                    file: $file,
                                    directory: 'galleries',
                                    maxWidth: 1200,
                                    quality: 85,
                                );
                            }),

                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Nomor Urut')
                            ->numeric()
                            ->default(fn () => Gallery::getNextSortOrder('kbtk'))
                            ->helperText('Urutan otomatis terisi nomor berikutnya. Item lain bergeser jika diubah.'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Foto')
                    ->disk('public')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->recordActions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->toolbarActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKbtkGalleries::route('/'),
            'create' => CreateKbtkGallery::route('/create'),
            'edit' => EditKbtkGallery::route('/{record}/edit'),
        ];
    }
}
