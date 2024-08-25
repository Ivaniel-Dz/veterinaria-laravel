<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MensajeController extends Controller
{
    // Mostrar los datos (GET)
    public function index()
    {
        return Inertia::render('Mensajes/Index', [
            'mensajes' => Mensaje::paginate()
        ]);
    }

    // Maneja el almacenamiento de datos (POST)
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

    // Actualizar datos (PUT)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'descripcion' => 'required|string',
        ]);

        $mensaje = Mensaje::findOrFail($id);
        $mensaje->update($validated);

        return response()->json(['message' => 'Mensaje actualizado exitosamente.']);
    }

    // Eliminar datos (DELETE)
    public function destroy($id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->delete();

        return response()->json(['message' => 'Mensaje eliminado exitosamente.']);
    }

}
