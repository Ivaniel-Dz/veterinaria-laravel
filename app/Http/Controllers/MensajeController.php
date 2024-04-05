<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MensajeController extends Controller
{

    public function index()
    {

        return Inertia::render('Mensajes/Index', [
            'mensajes' => Mensaje::paginate()
        ]);
    }
}
