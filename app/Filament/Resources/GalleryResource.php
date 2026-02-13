<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?int $navigationSort = 2;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-photo';
    }

    public static function getNavigationLabel(): string
    {
        return 'Galeri';
    }

    public static function getModelLabel(): string
    {
        return 'Foto';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Galeri';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Konten';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Foto')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul / Keterangan')
                            ->required()
                            ->maxLength(255),

                        Select::make('type')
                            ->label('Kategori')
                            ->options([
                                'sd' => 'SD Alam',
                                'ponpes' => 'Pondok Pesantren',
                                'kbtk' => 'KB & TK',
                            ])
                            ->required()
                            ->native(false)
                            ->live()
                            ->afterStateUpdated(fn ($set, ?string $state) => $set(
                                'sort_order',
                                $state ? Gallery::getNextSortOrder($state) : 0,
                            )),

                        FileUpload::make('image_path')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('galleries')
                            ->imageEditor()
                            ->required()
                            ->columnSpanFull()
                            ->saveUploadedFileUsing(function ($file) {
                                return \App\Services\ImageOptimizer::optimize(
                                    file: $file,
                                    directory: 'galleries',
                                    maxWidth: 1200,
                                    quality: 85,
                                );
                            }),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Pilih kategori dulu. Urutan otomatis terisi. Jika ditimpa, item lain akan bergeser.'),
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
                    ->limit(40),

                Tables\Columns\TextColumn::make('type')
                    ->label('Kategori')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'sd' => 'SD Alam',
                        'ponpes' => 'Pondok Pesantren',
                        'kbtk' => 'KB & TK',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'sd' => 'success',
                        'ponpes' => 'info',
                        'kbtk' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),

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
                Tables\Filters\SelectFilter::make('type')
                    ->label('Kategori')
                    ->options([
                        'sd' => 'SD Alam',
                        'ponpes' => 'Pondok Pesantren',
                        'kbtk' => 'KB & TK',
                    ]),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
