<?php

namespace Database\Seeders;

use App\Models\Mensaje;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // Cantidad de Usuarios para crear
        // User::factory(10)->create();

        // datos creados manual
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //Cantidad de Mensajes para crear
        Mensaje::factory(5)->create();
    }
}
