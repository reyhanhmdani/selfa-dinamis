<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/kbtk', function () {
    return view('programs.kbtk');
})->name('program.kbtk');

Route::get('/sd', function () {
    return view('programs.sd');
})->name('program.sd');

Route::get('/ponpes', function () {
    return view('programs.ponpes');
})->name('program.ponpes');
