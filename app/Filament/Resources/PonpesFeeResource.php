<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PonpesFeeResource\Pages\CreatePonpesFee;
use App\Filament\Resources\PonpesFeeResource\Pages\EditPonpesFee;
use App\Filament\Resources\PonpesFeeResource\Pages\ListPonpesFees;
use App\Models\AdmissionFee;
use Filament\Actions;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PonpesFeeResource extends Resource
{
    protected static ?string $model = AdmissionFee::class;

    protected static ?string $slug = 'ponpes-fees';

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-academic-cap';
    }

    public static function getNavigationLabel(): string
    {
        return 'Program Beasiswa';
    }

    public static function getModelLabel(): string
    {
        return 'Program Beasiswa Ponpes';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Program Beasiswa Ponpes';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pondok Pesantren';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('program_type', 'ponpes');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('program_type')
                    ->default('ponpes'),

                Section::make('Program Beasiswa Penuh (100% Bebas Biaya)')
                    ->description('Pondok Pesantren Sayf El Falah beroperasi dengan beasiswa penuh. Santri dibebaskan dari uang masuk dan SPP bulanan.')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Program')
                            ->default('Pondok Pesantren Sayf El Falah')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_published')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(3),
                    ])
                    ->columns(3),

                Section::make('Parameter Biaya (Tetap Rp 0 untuk Beasiswa Penuh)')
                    ->description('Nominal bernilai Rp 0 agar di website otomatis berlabel "100% Beasiswa / Gratis / Ditanggung Yayasan".')
                    ->schema([
                        TextInput::make('registration_fee')
                            ->label('Biaya Pendaftaran')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0)
                            ->helperText('Rp 0 = Pendaftaran Bebas Biaya'),

                        TextInput::make('enrollment_fee')
                            ->label('Uang Pangkal / Masuk')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0)
                            ->helperText('Rp 0 = 100% Bebas Uang Pangkal'),

                        TextInput::make('monthly_tuition')
                            ->label('SPP Bulanan')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(0)
                            ->helperText('Rp 0 = Bebas SPP Bulanan'),

                        TextInput::make('uniform_fee')
                            ->label('Akomodasi & Asrama')
                            ->numeric()
                            ->prefix('Rp')
                            ->nullable()
                            ->default(0)
                            ->helperText('Rp 0 = Asrama & makan 3x ditanggung'),
                    ])
                    ->columns(2),

                Section::make('Fasilitas Beasiswa & Catatan Seleksi')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Fasilitas yang Didapatkan Santri (Tekan Enter untuk menambah)')
                            ->placeholder('Contoh: Asrama Putra, Makan 3x Sehari, Kitab & Modul Gratis...')
                            ->columnSpanFull(),

                        TextInput::make('notes')
                            ->label('Catatan Pendaftaran & Kuota')
                            ->placeholder('Contoh: Kuota terbatas setiap angkatan melalui tahapan seleksi baca Al-Quran')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Program')
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('program_type')
                    ->label('Skema Pembiayaan')
                    ->badge()
                    ->formatStateUsing(fn () => '100% Beasiswa Penuh (Gratis)')
                    ->color('success'),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->recordActions([
                Actions\EditAction::make(),
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
            'index' => ListPonpesFees::route('/'),
            'create' => CreatePonpesFee::route('/create'),
            'edit' => EditPonpesFee::route('/{record}/edit'),
        ];
    }
}
