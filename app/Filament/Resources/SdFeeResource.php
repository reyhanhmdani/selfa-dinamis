<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SdFeeResource\Pages\CreateSdFee;
use App\Filament\Resources\SdFeeResource\Pages\EditSdFee;
use App\Filament\Resources\SdFeeResource\Pages\ListSdFees;
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

class SdFeeResource extends Resource
{
    protected static ?string $model = AdmissionFee::class;

    protected static ?string $slug = 'sd-fees';

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-banknotes';
    }

    public static function getNavigationLabel(): string
    {
        return 'Info & Biaya SD Alam';
    }

    public static function getModelLabel(): string
    {
        return 'Biaya SD Alam';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Info & Biaya SD Alam';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'SD Alam';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('program_type', 'sd');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('program_type')
                    ->default('sd'),

                Section::make('Identitas Program SD Alam')
                    ->description('Informasi judul dan visibilitas program SD Alam Sayf El Falah')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Program')
                            ->default('SD Alam Sayf El Falah')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_published')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(2),
                    ])
                    ->columns(3),

                Section::make('Rincian Biaya SD Alam (Rupiah)')
                    ->description('Masukkan nominal angka murni tanpa titik atau tanda baca (contoh: 4500000)')
                    ->schema([
                        TextInput::make('registration_fee')
                            ->label('Biaya Pendaftaran / Formulir')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(200000),

                        TextInput::make('enrollment_fee')
                            ->label('Uang Pangkal / Masuk')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(4500000),

                        TextInput::make('monthly_tuition')
                            ->label('SPP Bulanan')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(350000),

                        TextInput::make('uniform_fee')
                            ->label('Seragam & Perlengkapan')
                            ->numeric()
                            ->prefix('Rp')
                            ->nullable(),
                    ])
                    ->columns(2),

                Section::make('Fasilitas & Persyaratan')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Fasilitas / Keunggulan (Tekan Enter untuk menambah)')
                            ->placeholder('Ketik fasilitas lalu Enter...')
                            ->columnSpanFull(),

                        TagsInput::make('requirements')
                            ->label('Persyaratan / Berkas Santri Baru (Tekan Enter untuk menambah)')
                            ->placeholder('Contoh: Usia min 6 tahun, Fotokopi Akta & KK...')
                            ->helperText('Akan tampil di kartu pendaftaran santri baru. Jika dikosongkan, kartu akan otomatis menyesuaikan diri dengan rapi.')
                            ->columnSpanFull(),

                        TextInput::make('notes')
                            ->label('Catatan Tambahan')
                            ->placeholder('Contoh: Termasuk kurikulum alam, outbound berkala, dan praktikum sains lapangan')
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

                Tables\Columns\TextColumn::make('enrollment_fee')
                    ->label('Uang Pangkal')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state ?? 0, 0, ',', '.'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('monthly_tuition')
                    ->label('SPP Bulanan')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state ?? 0, 0, ',', '.'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('registration_fee')
                    ->label('Formulir')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state ?? 0, 0, ',', '.')),

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
            'index' => ListSdFees::route('/'),
            'create' => CreateSdFee::route('/create'),
            'edit' => EditSdFee::route('/{record}/edit'),
        ];
    }
}
