<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoController;

Route::redirect('/', '/fa');
Route::get('/sitemap.xml', [SeoController::class, 'sitemap']);
Route::get('/robots.txt', [SeoController::class, 'robots']);
Route::get('/{locale}', HomeController::class)
    ->whereIn('locale', ['fa', 'en'])
    ->name('home');
