<template>
  <form @submit.prevent="submitForm" class="text-center mt-5">
    <!-- Información del Propietario -->
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre del Propietario:</label>
      <input type="text" id="nombre" v-model="form.nombre" class="form-control" required>
      <span v-if="errors.nombre" class="text-danger">{{ errors.nombre }}</span>
    </div>

    <div class="mb-3">
      <label for="celular" class="form-label">Celular:</label>
      <input type="text" id="celular" v-model="form.celular" class="form-control" required>
      <span v-if="errors.celular" class="text-danger">{{ errors.celular }}</span>
    </div>

    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono:</label>
      <input type="text" id="telefono" v-model="form.telefono" class="form-control" required>
      <span v-if="errors.telefono" class="text-danger">{{ errors.telefono }}</span>
    </div>

    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <input type="text" id="direccion" v-model="form.direccion" class="form-control" required>
      <span v-if="errors.direccion" class="text-danger">{{ errors.direccion }}</span>
    </div>

    <!-- Información de la Mascota -->
    <div class="mb-3">
      <label for="mascota" class="form-label">Nombre de la Mascota:</label>
      <input type="text" id="mascota" v-model="form.mascota" class="form-control" required>
      <span v-if="errors.mascota" class="text-danger">{{ errors.mascota }}</span>
    </div>

    <div class="mb-3">
      <label for="especie" class="form-label">Especie:</label>
      <input type="text" id="especie" v-model="form.especie" class="form-control" required>
      <span v-if="errors.especie" class="text-danger">{{ errors.especie }}</span>
    </div>

    <div class="mb-3">
      <label for="raza" class="form-label">Raza (Opcional):</label>
      <input type="text" id="raza" v-model="form.raza" class="form-control">
      <span v-if="errors.raza" class="text-danger">{{ errors.raza }}</span>
    </div>

    <div class="mb-3">
      <label for="sexo" class="form-label">Sexo:</label>
      <select id="sexo" v-model="form.sexo" class="form-control" required>
        <option value="Macho">Macho</option>
        <option value="Hembra">Hembra</option>
      </select>
      <span v-if="errors.sexo" class="text-danger">{{ errors.sexo }}</span>
    </div>

    <div class="mb-3">
      <label for="fecha_nacimiento_mascota" class="form-label">Fecha de Nacimiento (Opcional):</label>
      <input type="date" id="fecha_nacimiento_mascota" v-model="form.fecha_nacimiento" class="form-control">
      <span v-if="errors.fecha_nacimiento" class="text-danger">{{ errors.fecha_nacimiento }}</span>
    </div>

    <div class="mb-3">
      <label for="peso" class="form-label">Peso (Opcional):</label>
      <input type="number" step="0.01" id="peso" v-model="form.peso" class="form-control">
      <span v-if="errors.peso" class="text-danger">{{ errors.peso }}</span>
    </div>

    <!-- Información de la Cita -->
    <div class="mb-3">
      <label for="servicio" class="form-label">Servicio:</label>
      <select id="servicio" v-model="form.servicio" class="form-control" required>
        <option value="">Selecciona un Servicio</option>
        <option value="baño">Baño</option>
        <option value="vacuna">Vacuna</option>
      </select>
      <span v-if="errors.servicio" class="text-danger">{{ errors.servicio }}</span>
    </div>

    <div class="mb-3">
      <label for="transporte" class="form-label">Transporte:</label>
      <input type="text" id="transporte" v-model="form.transporte" class="form-control" required>
      <span v-if="errors.transporte" class="text-danger">{{ errors.transporte }}</span>
    </div>

    <div class="mb-3">
      <label for="fecha_cita" class="form-label">Fecha de Cita:</label>
      <input type="date" id="fecha_cita" v-model="form.fecha" class="form-control" required>
      <span v-if="errors.fecha" class="text-danger">{{ errors.fecha }}</span>
    </div>

    <div class="mb-3">
      <label for="hora" class="form-label">Hora de Cita:</label>
      <input type="time" id="hora" v-model="form.hora" class="form-control" required>
      <span v-if="errors.hora" class="text-danger">{{ errors.hora }}</span>
    </div>

    <div class="mb-3">
      <label for="comentario" class="form-label">Comentario (Opcional):</label>
      <textarea id="comentario" v-model="form.comentario" class="form-control"></textarea>
      <span v-if="errors.comentario" class="text-danger">{{ errors.comentario }}</span>
    </div>

    <!-- Botón de Envío -->
    <button type="submit" class="btn btn-primary">Guardar Cita</button>
  </form>
</template>

<script setup>
import { reactive, ref } from 'vue';

// Formulario reactivo
const form = reactive({
  mascota: "",
  especie: "",
  raza: "",
  sexo: "",
  fecha_nacimiento: "",
  peso: "",
  nombre: "",
  celular: "",
  telefono: "",
  direccion: "",
  servicio: "",
  transporte: "",
  fecha: "",
  hora: "",
  comentario: "",
});

// Objeto de errores
const errors = ref({});

// Función para enviar el formulario
async function submitForm() {
  try {
    const response = await fetch('/citas', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        // Asegúrate de incluir el token CSRF si es necesario
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      },
      body: JSON.stringify(form),
    });

    if (!response.ok) {
      if (response.status === 422) {
        const errorData = await response.json();
        errors.value = errorData.errors;
      } else {
        throw new Error('Ocurrió un error al guardar la cita.');
      }
    } else {
      alert('¡Cita guardada exitosamente!');
      // Limpiar formulario después del envío
      Object.keys(form).forEach(key => form[key] = '');
      errors.value = {};
    }
  } catch (error) {
    alert(error.message);
  }
}
</script>

<style>
.text-danger {
  color: red;
}
</style>
