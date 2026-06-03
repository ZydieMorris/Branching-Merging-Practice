<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    Route::inertia('projects', 'Projects')->name('projects');
    Route::inertia('user', 'User')->name('user');
});



require __DIR__.'/settings.php';
