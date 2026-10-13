<?php

namespace App\Filament\Resources\AdmissionFees\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdmissionFeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Program')
                    ->schema([
                        Select::make('program_type')
                            ->label('Jenis Jenjang')
                            ->options([
                                'kbtk' => 'KB & TK Selfa',
                                'sd' => 'SD Alam Selfa',
                                'ponpes' => 'Pondok Pesantren Selfa',
                            ])
                            ->required(),

                        TextInput::make('title')
                            ->label('Nama Lengkap Program')
                            ->placeholder('Contoh: SD Alam Sayf El Falah')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_published')
                            ->label('Tampilkan di Web')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(1),
                    ])
                    ->columns(2),

                Section::make('Rincian Biaya (Nominal Rupiah)')
                    ->description('Masukkan angka tanpa titik atau koma (contoh: 4500000 untuk 4,5 juta)')
                    ->schema([
                        TextInput::make('registration_fee')
                            ->label('Biaya Pendaftaran / Formulir')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0),

                        TextInput::make('enrollment_fee')
                            ->label('Uang Pangkal / Uang Masuk')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0),

                        TextInput::make('monthly_tuition')
                            ->label('SPP Bulanan')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0),

                        TextInput::make('uniform_fee')
                            ->label('Seragam & Perlengkapan')
                            ->numeric()
                            ->prefix('Rp')
                            ->nullable(),
                    ])
                    ->columns(2),

                Section::make('Fasilitas & Keterangan')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Fasilitas / Hal yang Termasuk (Tekan Enter untuk menambah)')
                            ->placeholder('Ketik poin lalu tekan Enter...')
                            ->columnSpanFull(),

                        TextInput::make('notes')
                            ->label('Catatan Tambahan')
                            ->placeholder('Contoh: Sudah termasuk asrama dan makan 3x sehari')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
