<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(GameController::class)->group(function () {
        Route::get('games', 'index')->name('games.index');
        Route::get('games/{game}', 'show')->name('games.show');
    });
    Route::view('projecten', 'projecten')->name('projecten');
    Route::view('curriculum-vitae', 'curriculum-vitae')->name('curriculum-vitae');
    Route::view('contact', 'contact')->name('contact');
    Route::view('copyright', 'copyright')->name('copyright');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
