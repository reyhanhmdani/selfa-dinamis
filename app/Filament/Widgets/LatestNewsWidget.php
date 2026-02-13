<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestNewsWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Berita Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                News::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->label('Status')
                    ->boolean(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->paginated(false);
    }
}
