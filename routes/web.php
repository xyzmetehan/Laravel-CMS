<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('home.pricing');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('home.portfolio');
