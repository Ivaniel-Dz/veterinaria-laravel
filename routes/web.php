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

// Rutas de acceso al Dashboard con autenticación 
Route::get('/dashboard', function () {
    //Ingresa la ruta cita
   return redirect()->route('citas.index');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rutas de Dashboard protegidas con autenticación
Route::middleware('auth')->group(function () {
    //Ruta sin controlador 
    Route::get('/service', fn () => Inertia::render('Servicios/Service'))->name('service');

    //Rutas usando controladores
    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para mensajes
    Route::get('mensajes', [MensajeController::class, 'index'])->name('mensajes.index'); // ruta Mostrar
    Route::put('mensajes/{id}', [MensajeController::class, 'update'])->name('mensajes.update'); // ruta actualizar
    Route::delete('mensajes/{id}', [MensajeController::class, 'destroy'])->name('mensajes.destroy'); //ruta para Eliminar

    //Rutas para Citas
    Route::get('citas', [CitaController::class, 'index'])->name('citas.index'); // ruta GET (Mostrar)

});

require __DIR__.'/auth.php';
