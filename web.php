<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller; // <-- Memanggil class Controller dasar

// Rute untuk Home (/) dan halaman dinamis (/ticket, /about)
Route::get('/', [Controller::class, 'showPage'])->name('home');
Route::get('/{page}', [Controller::class, 'showPage'])->name('page');