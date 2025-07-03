<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/page', function () {
    return view('welcome');
});

Route::get('/', [PortfolioController::class, 'home']);
