<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('front.index');
})->name('home.index');

Route::get('/about', static function () {
    return view('front.about');
})->name('home.about');

Route::get('/contact', static function () {
    return view('front.contact');
})->name('home.contact');

Route::get('/pricing', static function () {
    return view('front.pricing');
})->name('home.pricing');

Route::get('/faq', static function () {
    return view('front.faq');
})->name('home.faq');

Route::get('/blog', static function () {
    return view('front.blog');
})->name('home.blog');

Route::get('/portfolio', static function () {
    return view('front.portfolio');
})->name('home.portfolio');
