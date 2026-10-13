<?php

namespace App\Filament\Resources\AdmissionWaves\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdmissionWaveForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Gelombang Pendaftaran')
                    ->schema([
                        TextInput::make('wave_name')
                            ->label('Nama Gelombang')
                            ->placeholder('Contoh: Gelombang 1 - TA 2026/2027')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->helperText('Hanya gelombang aktif yang tampil di landing page')
                            ->default(true),

                        DatePicker::make('start_date')
                            ->label('Tanggal Dibuka'),

                        DatePicker::make('end_date')
                            ->label('Batas Akhir Pendaftaran'),

                        TextInput::make('whatsapp_number')
                            ->label('No. WhatsApp Panitia PPDB')
                            ->placeholder('082122073707')
                            ->required()
                            ->default('082122073707'),

                        FileUpload::make('brochure_file')
                            ->label('Brosur Pendaftaran (PDF)')
                            ->disk('public')
                            ->directory('brochures')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(10240)
                            ->downloadable()
                            ->openable(),

                        Textarea::make('announcement')
                            ->label('Teks Pengumuman / Catatan')
                            ->placeholder('Contoh: Dapatkan diskon uang pangkal untuk 20 pendaftar pertama...')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
