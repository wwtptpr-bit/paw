<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| PENTING: Perhatikan bagian ->name('...') di belakang setiap route.
| Ini yang membuat fungsi route('nama') di view bisa berjalan.
*/

// Route Dashboard (Halaman Utama)
Route::get('/', [PraktikumController::class, 'index'])->name('dashboard');

// Route Home
Route::get('/home', [PraktikumController::class, 'home'])->name('home');

// Route Ticket
Route::get('/ticket', [PraktikumController::class, 'ticket'])->name('ticket');

// Route About
Route::get('/about', [PraktikumController::class, 'about'])->name('about');


// --- Jalur API (Untuk Javascript - Jangan Dihapus) ---
Route::prefix('api')->group(function () {
    Route::get('/praktikum', [PraktikumController::class, 'apiIndex']);
    Route::post('/praktikum', [PraktikumController::class, 'store']);
    Route::put('/praktikum/{id}', [PraktikumController::class, 'update']);
    Route::delete('/praktikum/{id}', [PraktikumController::class, 'destroy']);
});