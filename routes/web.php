<?php

use App\Http\Controllers\Admin\PastaController as AdminPastaController;
use App\Http\Controllers\Guest\PastaController as GuestPastaController;

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
Route::get('/pastas/{pasta}', [GuestPastaController::class, 'show'])->name('guest.pastas.show');
