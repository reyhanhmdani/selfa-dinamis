<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KbtkFeeResource\Pages\CreateKbtkFee;
use App\Filament\Resources\KbtkFeeResource\Pages\EditKbtkFee;
use App\Filament\Resources\KbtkFeeResource\Pages\ListKbtkFees;
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

class KbtkFeeResource extends Resource
{
    protected static ?string $model = AdmissionFee::class;

    protected static ?string $slug = 'kbtk-fees';

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-banknotes';
    }

    public static function getNavigationLabel(): string
    {
        return 'Info & Biaya KB-TK';
    }

    public static function getModelLabel(): string
    {
        return 'Biaya KB-TK';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Info & Biaya KB-TK';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'KB & TK';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('program_type', 'kbtk');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('program_type')
                    ->default('kbtk'),

                Section::make('Identitas Program KB & TK')
                    ->description('Informasi judul dan visibilitas program KB & TK Sayf El Falah')
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Program')
                            ->default('KB & TK Sayf El Falah')
                            ->required()
                            ->maxLength(255),

                        Toggle::make('is_published')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->numeric()
                            ->default(1),
                    ])
                    ->columns(3),

                Section::make('Rincian Biaya KB & TK (Rupiah)')
                    ->description('Masukkan nominal angka murni tanpa titik atau tanda baca (contoh: 3500000)')
                    ->schema([
                        TextInput::make('registration_fee')
                            ->label('Biaya Pendaftaran / Formulir')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(150000),

                        TextInput::make('enrollment_fee')
                            ->label('Uang Pangkal / Masuk')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(3500000),

                        TextInput::make('monthly_tuition')
                            ->label('SPP Bulanan')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->default(300000),

                        TextInput::make('uniform_fee')
                            ->label('Seragam & Perlengkapan')
                            ->numeric()
                            ->prefix('Rp')
                            ->nullable(),
                    ])
                    ->columns(2),

                Section::make('Fasilitas & Catatan')
                    ->schema([
                        TagsInput::make('features')
                            ->label('Fasilitas / Keunggulan (Tekan Enter untuk menambah)')
                            ->placeholder('Ketik fasilitas lalu Enter...')
                            ->columnSpanFull(),

                        TextInput::make('notes')
                            ->label('Catatan Tambahan')
                            ->placeholder('Contoh: Biaya sudah termasuk modul dan kegiatan outing class per semester')
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
            'index' => ListKbtkFees::route('/'),
            'create' => CreateKbtkFee::route('/create'),
            'edit' => EditKbtkFee::route('/{record}/edit'),
        ];
    }
}
