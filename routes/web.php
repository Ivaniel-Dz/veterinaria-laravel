<?php

use App\Http\Controllers\MensajeController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Rutas de la pagina web
Route::get('/', function () {
    $loginUrl = route('login');

    return Inertia::render('Inicio', compact('loginUrl'));
});


// Ruta para enviar form, disponible para usuarios no autenticados
Route::post('mensajes', [MensajeController::class, 'store'])->name('mensajes.store'); // ruta POST (Enviar)
Route::post('citas', [CitaController::class, 'store'])->name('citas.store');

// Rutas de Dashboard con autenticación 
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rutas de Dashboard protegidas con autenticación
Route::middleware('auth')->group(function () {
    Route::get('/service', fn () => Inertia::render('Service'))->name('service');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para mensajes
    Route::get('mensajes', [MensajeController::class, 'index'])->name('mensajes.index'); // ruta GET (Mostrar)

    //Rutas para Citas

});

require __DIR__.'/auth.php';
