<?php

use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/noticias', NoticiaController::class);
Route::resource('/papel', PapelController::class);
Route::resource('/usuario', UsuarioController::class);
Route::resource('/permission', PermissionController::class);

require __DIR__.'/auth.php';