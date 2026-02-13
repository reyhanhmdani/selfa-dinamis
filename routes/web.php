<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/kbtk', [PageController::class, 'kbtk'])->name('program.kbtk');
Route::get('/sd', [PageController::class, 'sd'])->name('program.sd');
Route::get('/ponpes', [PageController::class, 'ponpes'])->name('program.ponpes');

Route::get('/berita', [PageController::class, 'berita'])->name('berita.index');
Route::get('/berita/{slug}', [PageController::class, 'beritaShow'])->name('berita.show');
