<?php

use App\Http\Controllers\Admin\ComicsController;
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
Route::resource('comics',ComicsController::class);
// // Read
// Route::get('/comics',[ComicsController::class, 'index'])->name('comics.index');
// Route::get('/comics/{id}',[ComicsController::class, 'show'])->name('comics.show');

// //Create
// // ::get per il recupero dati
// Route::get('/comics/create',[ComicsController::class, 'create'])->name('comics.create');
// //::post per la creazione dei dati
// Route::post('/comics/add',[ComicsController::class, 'store'])->name('comics.store');

// // Update
// Route::get('/comics/{id}/update',[ComicsController::class, 'edit'])->name('comics.edit');
// Route::put('/comics/{request}/{id}/update',[ComicsController::class, 'update'])->name('comics.update');

// // delete
// Route::delete('comics/{id}/delete',[ComicsController::class, 'destroy'])->name('comics.destroy');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
