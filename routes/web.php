<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/page', function () {
    return view('welcome');
});

// Route::get('/', [PortfolioController::class, 'home']);
// Route::get('/services', [PortfolioController::class, 'services']);

Route::view('/', 'portfolio.home')->name('home');
Route::view('/services', 'portfolio.services')->name('services');
Route::view('/about', 'portfolio.about')->name('about');
Route::view('/skills', 'portfolio.skills')->name('skills');
Route::view('/projects', 'portfolio.projects')->name('projects');
