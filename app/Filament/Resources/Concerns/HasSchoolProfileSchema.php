<?php

namespace App\Filament\Resources\Concerns;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Illuminate\Database\Eloquent\Model;

trait HasSchoolProfileSchema
{
    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function getProfileFormSchema(Schema $schema, string $defaultDivision): Schema
    {
        return $schema
            ->components([
                Hidden::make('division')
                    ->default($defaultDivision),

                Section::make('Identitas Bagian')
                    ->description('Judul lembaga dan badge section pada halaman website')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Lembaga / Halaman')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('badge')
                            ->label('Sub-judul / Badge Visi Misi')
                            ->placeholder('Contoh: Arah & Tujuan Kami')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Visi & Misi')
                    ->description('Teks visi dan butir-butir misi yang tampil pada kartu visi-misi')
                    ->schema([
                        Textarea::make('vision')
                            ->label('Visi')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull()
                            ->placeholder('Tuliskan rumusan visi di sini...'),

                        Repeater::make('missions')
                            ->label('Daftar Butir Misi')
                            ->schema([
                                TextInput::make('text')
                                    ->label('Poin Misi')
                                    ->required()
                                    ->placeholder('Tuliskan butir misi...'),
                            ])
                            ->addActionLabel('Tambah Butir Misi')
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ]),

                Section::make('Profil & Tentang Sekolah')
                    ->description('Konten section Tentang Kami / Sejarah dan foto pendukung')
                    ->schema([
                        TextInput::make('about_title')
                            ->label('Judul Bagian Tentang')
                            ->placeholder('Contoh: Sejarah Singkat atau Tentang SD Alam')
                            ->columnSpanFull(),

                        Textarea::make('about_text')
                            ->label('Deskripsi Profil / Tentang')
                            ->rows(5)
                            ->columnSpanFull()
                            ->placeholder('Tuliskan deskripsi profil atau sejarah di sini...'),

                        FileUpload::make('about_image')
                            ->label('Foto Profil / Gedung')
                            ->image()
                            ->disk('public')
                            ->directory('profiles')
                            ->imageEditor()
                            ->columnSpanFull()
                            ->helperText('Format JPG, PNG, atau WebP. Jika dikosongkan, sistem otomatis menggunakan foto bawaan website.'),
                    ]),

                Section::make('Poin Keunggulan / Fasilitas')
                    ->description('Daftar keunggulan dengan icon checklist bintang')
                    ->schema([
                        Repeater::make('features')
                            ->label('Daftar Poin Keunggulan')
                            ->schema([
                                TextInput::make('text')
                                    ->label('Poin Keunggulan')
                                    ->required()
                                    ->placeholder('Contoh: Guru berkualitas dan berpengalaman'),
                            ])
                            ->addActionLabel('Tambah Keunggulan')
                            ->reorderable()
                            ->collapsible()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function getProfileTable(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Profil')
                    ->weight('bold')
                    ->searchable(),

                Tables\Columns\TextColumn::make('vision')
                    ->label('Ringkasan Visi')
                    ->limit(60)
                    ->tooltip(fn ($record): string => $record->vision ?? ''),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([]);
    }
}
