<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Inertia\Inertia;

class MensajeController extends Controller
{
    // Muestra los datos
    public function index()
    {
        return Inertia::render('Mensajes/Index', [
            'mensajes' => Mensaje::paginate()
        ]);
    }
}
