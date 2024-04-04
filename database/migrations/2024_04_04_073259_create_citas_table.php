<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id('id_cita');
            $table->foreignId('id_propietario')->constrained('propietarios', 'id_propietario')->cascadeOnDelete();
            $table->foreignId('id_mascota')->constrained('mascotas', 'id_mascota')->cascadeOnDelete();
            $table->foreignId('id_servicio')->constrained('servicios', 'id_servicio')->cascadeOnDelete();
            $table->foreignId('id_estado')->constrained('estados')->cascadeOnDelete();
            $table->string('transporte')->nullable();
            $table->text('comentario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
