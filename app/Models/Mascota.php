<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = ['mascota', 'especie', 'raza', 'sexo', 'fecha_nacimiento', 'peso'];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_mascota');
    }
}
