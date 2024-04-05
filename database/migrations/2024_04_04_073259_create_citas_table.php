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
            $table->id();
            $table->foreignId('id_propietario')->constrained('propietarios')->cascadeOnDelete();
            $table->foreignId('id_mascota')->constrained('mascotas')->cascadeOnDelete();
            $table->foreignId('id_servicio')->constrained('servicios')->cascadeOnDelete();
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
