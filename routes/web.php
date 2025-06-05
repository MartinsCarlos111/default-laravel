<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/teste', function () {
    return Inertia::render('Bem vindo ao meu laravel basico apenas com o banco de dados!');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
