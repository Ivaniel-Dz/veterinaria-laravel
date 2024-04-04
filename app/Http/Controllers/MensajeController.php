<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    // Mostrar todos los mensajes
    public function index()
    {   
        return Mensaje::all();
    }

    // Crear un nuevo mensaje
    public function store(Request $request)
    {
        $mensaje = Mensaje::create($request->all());
        return response()->json($mensaje, 201);
    }

    // Mostrar un mensaje específico
    public function show($id)
    {
        return Mensaje::findOrFail($id);
    }

    // Mostrar un mensaje específico
    public function destroy($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();
        return response()->json(null, 204);
    }
}
