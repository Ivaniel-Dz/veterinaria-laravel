<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
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

    // Maneja el almacenamiento de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'descripcion' => 'required|string',
        ]);

        Mensaje::create($validatedData);

        return response()->json(['message' => 'Formulario enviado correctamente']);
    }
}
