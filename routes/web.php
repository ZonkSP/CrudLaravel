<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

//Se cambia la ruta para que muestre la pagina de usuariosRoute::get('/', [UsuarioController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rutas para el CRUD de usuarios
Route::resource('usuarios', UsuarioController::class);
// Esto crea automáticamente las rutas para index, create, store, edit, update, y destroy
Route::resource('materias', MateriaController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
