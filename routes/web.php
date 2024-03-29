<?php

use App\Http\Controllers\Admin\PastaController as AdminPastaController;
use App\Http\Controllers\Guest\PastaController as GuestPastaController;
use App\Http\Controllers\Guest\MillController as GuestMillController;
use App\Http\Controllers\Guest\RecipeController as GuestRecipeController;

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

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('pastas', [AdminPastaController::class, 'index'])->name('pastas.index');
    Route::delete('pastas/{pasta}', [AdminPastaController::class, 'destroy'])->name('pastas.destroy');
});

Route::name('guest.')->group(function(){
    Route::get('/pastas/deleted', [GuestPastaController::class, 'deletedPastas'])->name('pastas.deleted');
    Route::resource('pastas', GuestPastaController::class);
    Route::resource('mills', GuestMillController::class);
    Route::resource('recipes', GuestRecipeController::class);
});


// Route::get('/pastas', [GuestPastaController::class, 'index'])->name('guest.pastas.index');
// Route::post('/pastas', [GuestPastaController::class, 'store'])->name('guest.pastas.store');
// Route::get('/pastas/create', [GuestPastaController::class, 'create'])->name('guest.pastas.create');
// Route::get('/pastas/{pasta}', [GuestPastaController::class, 'show'])->name('guest.pastas.show');
// Route::put('/pastas/{pasta}', [GuestPastaController::class, 'update'])->name('guest.pastas.update');
// Route::get('/pastas/{pasta}/edit', [GuestPastaController::class, 'edit'])->name('guest.pastas.edit');

// Route::get('/mills', [GuestMillController::class, 'index'])->name('guest.mills.index');
// Route::post('/mills', [GuestMillController::class, 'store'])->name('guest.mills.store');
// Route::get('/mills/create', [GuestMillController::class, 'create'])->name('guest.mills.create');
// Route::get('/mills/{mill}', [GuestMillController::class, 'show'])->name('guest.mills.show');
// Route::get('/mills/{mill}/edit', [GuestMillController::class, 'edit'])->name('guest.mills.edit');
// Route::put('/mills/{mill}', [GuestMillController::class, 'update'])->name('guest.mills.update');

// Route::get('/recipes', [GuestRecipeController::class, 'index'])->name('guest.recipes.index');
// Route::post('/recipes', [GuestRecipeController::class, 'store'])->name('guest.recipes.store');
// Route::get('/recipes/create', [GuestRecipeController::class, 'create'])->name('guest.recipes.create');
// Route::get('/recipes/{recipe}', [GuestRecipeController::class, 'show'])->name('guest.recipes.show');
// Route::get('/recipes/{recipe}/edit', [GuestRecipeController::class, 'edit'])->name('guest.recipes.edit');
// Route::put('/recipes/{recipe}', [GuestRecipeController::class, 'update'])->name('guest.recipes.update');

