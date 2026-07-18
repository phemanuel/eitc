<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/process', [HomeController::class, 'process'])->name('process');

Route::get('/career', [HomeController::class, 'career'])->name('career');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/solutions', [HomeController::class, 'solutions'])->name('solutions');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
