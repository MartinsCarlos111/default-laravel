<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/teste', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/api/teste', function () {
    return response()->json([
        'mensagem' => 'Rota teste',
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
