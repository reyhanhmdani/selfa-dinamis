<?php

namespace App\Filament\Widgets;

use App\Models\Gallery;
use App\Models\News;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', News::count())
                ->description('Berita terpublikasi: ' . News::where('is_published', true)->count())
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success')
                ->chart([2, 4, 6, 8, 5, 7, 10]),

            Stat::make('Galeri SD', Gallery::where('type', 'sd')->count())
                ->description('Foto aktif: ' . Gallery::where('type', 'sd')->where('is_active', true)->count())
                ->descriptionIcon('heroicon-m-photo')
                ->color('info')
                ->chart([3, 5, 7, 4, 6, 8, 9]),

            Stat::make('Galeri Ponpes', Gallery::where('type', 'ponpes')->count())
                ->description('Foto aktif: ' . Gallery::where('type', 'ponpes')->where('is_active', true)->count())
                ->descriptionIcon('heroicon-m-photo')
                ->color('warning')
                ->chart([1, 3, 5, 2, 4, 6, 7]),

            Stat::make('Galeri KB & TK', Gallery::where('type', 'kbtk')->count())
                ->description('Foto aktif: ' . Gallery::where('type', 'kbtk')->where('is_active', true)->count())
                ->descriptionIcon('heroicon-m-photo')
                ->color('danger')
                ->chart([4, 2, 6, 3, 5, 7, 8]),
        ];
    }
}
