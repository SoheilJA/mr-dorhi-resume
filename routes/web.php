<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/fa');

Route::get('/{locale}', HomeController::class)
    ->whereIn('locale', ['fa', 'en'])
    ->name('home');
