<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\News;
use App\Observers\GalleryObserver;
use App\Observers\NewsObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register observers untuk auto-delete file lama
        News::observe(NewsObserver::class);
        Gallery::observe(GalleryObserver::class);
    }
}
