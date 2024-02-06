<?php

use App\Http\Controllers\Admin\PastaController as AdminPastaController;
use App\Http\Controllers\Guest\PastaController as GuestPastaController;
use App\Http\Controllers\Guest\MillController as GuestMillController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('pages.home');})->name('pages.home');
Route::get('admin/pastas', [AdminPastaController::class, 'index'])->name('admin.pastas.index');

//
// Route::resource('pastas', GuestPastaController::class);

Route::get('/pastas', [GuestPastaController::class, 'index'])->name('guest.pastas.index');
Route::post('/pastas', [GuestPastaController::class, 'store'])->name('guest.pastas.store');
Route::get('/pastas/create', [GuestPastaController::class, 'create'])->name('guest.pastas.create');
Route::get('/pastas/{pasta}', [GuestPastaController::class, 'show'])->name('guest.pastas.show');

Route::get('/mills', [GuestMillController::class, 'index'])->name('guest.mills.index');
Route::post('/mills', [GuestMillController::class, 'store'])->name('guest.mills.store');
Route::get('/mills/create', [GuestMillController::class, 'create'])->name('guest.mills.create');
Route::get('/mills/{mill}', [GuestMillController::class, 'show'])->name('guest.mills.show');