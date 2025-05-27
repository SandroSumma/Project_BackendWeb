<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
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
// Publieke routes
Route::resource('news', NewsController::class);
Route::resource('faq', FaqController::class)->only(['index', 'show']);
Route::post('/contact', [ContactController::class, 'store']);

// Publiek profiel bekijken (geen middleware want publiek)
Route::get('/users/{user}', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/nieuwtjes', [NewsController::class, 'index'])->name('news.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send'); // Voor contactformulier verzending
