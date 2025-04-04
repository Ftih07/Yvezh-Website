<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PortfolioController::class, 'index'])->name('index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');