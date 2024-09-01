<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Propietario;
use App\Models\Mascota;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class CitaController extends Controller
{

    // Muestra datos (GET)
    public function index()
    {
        return Inertia::render('Citas/Index', [
            'citas' => Cita::with(['propietario', 'mascota', 'servicio'])->paginate(5)
        ]);
    }

    // Guardar datos (POST)
    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'mascota' => 'required|string|max:255',
                'especie' => 'required|string|max:255',
                'raza' => 'nullable|string|max:255',
                'sexo' => 'required|string|max:10',
                'fecha_nacimiento' => 'nullable|date',
                'peso' => 'nullable|numeric',
                'nombre' => 'required|string|max:255',
                'celular' => 'required|string|max:15',
                'telefono' => 'required|string|max:15',
                'direccion' => 'required|string|max:255',
                'servicio' => 'required|string|max:50',
                'hora' => 'required|date_format:H:i',
                'fecha' => 'required|date',
                'transporte' => 'required|string|max:50',
                'comentario' => 'nullable|string',
            ]);

            // Guardar la mascota
            $mascota = Mascota::create([
                'mascota' => $validatedData['mascota'],
                'especie' => $validatedData['especie'],
                'raza' => $validatedData['raza'],
                'sexo' => $validatedData['sexo'],
                'fecha_nacimiento' => $validatedData['fecha_nacimiento'],
                'peso' => $validatedData['peso'],
            ]);

            // Guardar el propietario
            $propietario = Propietario::create([
                'nombre' => $validatedData['nombre'],
                'celular' => $validatedData['celular'],
                'telefono' => $validatedData['telefono'],
                'direccion' => $validatedData['direccion'],
            ]);

            // Guardar el servicio
            $servicio = Servicio::create([
                'servicio' => $validatedData['servicio'],
                'hora' => $validatedData['hora'],
                'fecha' => $validatedData['fecha'],
            ]);

            // Guardar la cita con las referencias correctas
            Cita::create([
                'id_propietario' => $propietario->id, // id del propietario
                'id_mascota' => $mascota->id,         // id de la mascota
                'id_servicio' => $servicio->id,       // id del servicio
                'id_estado' => 1,                     // Suponiendo que 1 es el estado inicial
                'transporte' => $validatedData['transporte'],
                'comentario' => $validatedData['comentario'],
            ]);

            return response()->json(['message' => 'Cita guardada exitosamente!'], 201);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocurrió un error al guardar la cita.'], 500);
        }
    }

     // Muestra el formulario de edición para una cita específica
    public function edit($id)
    {
        $cita = Cita::with(['propietario', 'mascota', 'servicio'])->findOrFail($id);
        return Inertia::render('Citas/Edit', ['cita' => $cita,]);
    }

    // Actualizar datos (PUT)
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'mascota' => 'required|string|max:50',
            'especie' => 'required|string|max:255', // No actualizar
            'raza' => 'nullable|string|max:255',    // No actualizar
            'sexo' => 'required|string|max:10',     // No actualizar
            'fecha_nacimiento' => 'nullable|date',
            'peso' => 'nullable|numeric',           // No actualizar
            'nombre' => 'required|string|max:255',
            'celular' => 'required|string|max:15',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'servicio' => 'required|string|max:50',
            'hora' => 'required|date_format:H:i',
            'fecha' => 'required|date',
            'transporte' => 'nullable|string|max:50',
            'comentario' => 'nullable|string',       // No actualizar
            'estado' => 'required|integer|in:1,2,3,4',
        ]);

        $cita = Cita::findOrFail($id);

        // Actualizar mascota
        $mascota = Mascota::findOrFail($cita->id_mascota);
        $mascota->update([
            'mascota' => $validatedData['mascota'],
            'especie' => $validatedData['especie'],
            'raza' => $validatedData['raza'],
            'sexo' => $validatedData['sexo'],
            'fecha_nacimiento' => $validatedData['fecha_nacimiento'],
            'peso' => $validatedData['peso'],
        ]);

        // Actualizar propietario
        $propietario = Propietario::findOrFail($cita->id_propietario);
        $propietario->update([
            'nombre' => $validatedData['nombre'],
            'celular' => $validatedData['celular'],
            'telefono' => $validatedData['telefono'],
            'direccion' => $validatedData['direccion'],
        ]);

        // Actualizar servicio
        $servicio = Servicio::findOrFail($cita->id_servicio);
        $servicio->update([
            'servicio' => $validatedData['servicio'],
            'hora' => $validatedData['hora'],
            'fecha' => $validatedData['fecha'],
        ]);

        // Actualizar cita
        $cita->update([
            'id_estado' => $validatedData['estado'],
            'transporte' => $validatedData['transporte'],
            'comentario' => $validatedData['comentario'],
        ]);

        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente!');
    }


    // Eliminar datos (DELETE)
    public function destroy($id) {
        
        $cita = Cita::findOrFail($id);
        $cita->delete();

        return redirect()->route('citas.index');
    }
}
