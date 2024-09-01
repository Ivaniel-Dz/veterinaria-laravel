<template>
    <Head title="Editar -" />

    <AuthenticatedLayout>
        
            <section class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <!-- Titulo -->
                <div>
                    <h2 class="text-2xl font-semibold leading-tight pb-2"> Cita Actualizar</h2>
                </div>
                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 ">
                    
                    <form @submit.prevent="submitForm" class="space-y-4">
                        <!-- Información del Dueño -->
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="name">Nombre del Dueño</label>
                                    <input class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Nombre del Dueño"
                                        type="text"
                                        id="name"
                                        v-model="form.nombre"/>
                                    <span v-if="errors.nombre" class="error">{{ errors.nombre }}</span>
                                </div>

                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="direccion">Dirección</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Dirección"
                                        type="text"
                                        id="direccion"
                                        v-model="form.direccion"/>
                                    <span v-if="errors.direccion" class="error">{{ errors.direccion }}</span>
                                </div>
                            </div>

                            <!-- Conctacto -->
                            <div
                                class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="phone">Numero de Telefono</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Numero de Telefonor"
                                        type="tel"
                                        id="phone"
                                        v-model="form.telefono"/>
                                    <span v-if="errors.telefono" class="error">{{ errors.telefono }}</span>
                                </div>

                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="celular">Numero de Celular</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Numero de Celular"
                                        type="tel"
                                        id="celular"
                                        v-model="form.celular"/>
                                    <span v-if="errors.celular" class="error">{{ errors.celular }}</span>
                                </div>
                            </div>

                            <!-- Informacion de la Mascota -->
                            <div
                                class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="mascota">Nombre de la Mascota</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Nombre de la Mascota"
                                        type="text"
                                        id="mascota"
                                        v-model="form.mascota"/>
                                    <span v-if="errors.mascota" class="error">{{ errors.mascota }}</span>
                                </div>

                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Fecha de Nacimiento"
                                        type="date"
                                        id="fecha_nacimiento"
                                        v-model="form.fecha_nacimiento"/>
                                    <span v-if="errors.fecha_nacimiento" class="error">{{ errors.fecha_nacimiento }}</span>
                                </div>
                            </div>

                            <!-- Servicio -->
                            <div
                                class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="transporte">Transporte</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Transporte"
                                        type="text"
                                        id="transporte"
                                        v-model="form.transporte"/>
                                    <span v-if="errors.transporte" class="error">{{ errors.transporte }}</span>
                                </div>

                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="servicio">Servicio</label>
                                    <select
                                        id="servicio"
                                        v-model="form.servicio"
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm">
                                            <option value="Consulta general"> Consulta general </option>
                                            <option value="Vacunación"> Vacunación </option>
                                            <option value="Desparasitación"> Desparasitación </option>
                                            <option value="Cirugía"> Cirugía </option>
                                            <option value="Odontología"> Odontología </option>
                                            <option value="Peluquería"> Peluquería </option>
                                    </select>
                                     <span v-if="errors.servicio" class="error">{{ errors.servicio }}</span>
                                </div>
                            </div>

                            <!-- Horario -->
                            <div
                                class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="fecha">Fecha de la Cita</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Fecha de la Cita"
                                        type="date"
                                        id="fecha"
                                        v-model="form.fecha"/>
                                     <span v-if="errors.fecha" class="error">{{ errors.fecha }}</span>
                                </div>

                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="hora">Hora</label>
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Hora de la Cita"
                                        type="time"
                                        id="hora"
                                        v-model="form.hora"/>
                                     <span v-if="errors.hora" class="error">{{ errors.hora }}</span>
                                </div>
                            </div>

                            <!-- Estado -->
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                                <div>
                                    <label class="block mb-1 text-xs font-medium text-gray-700" for="estado">Estado</label>
                                    <select name="estado" id="estado"v-model="form.estado"
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm">
                                            <option value="1">Pendiente</option>
                                            <option value="2">Atendido</option>
                                            <option value="3">Pospuesto</option>
                                            <option value="4">Cancelado</option>
                                    </select>
                                     <span v-if="errors.estado" class="error">{{ errors.estado }}</span>
                                </div>
                            </div>

                             <div class="mt-4">
                                <!-- Actualizar -->
                                <button type="submit" :disabled="form.processing"
                                        class="inline-block w-full rounded-lg bg-[#111827] px-5 mx-5 py-3 font-medium text-white sm:w-auto hover:bg-gray-600">
                                    Actualizar
                                </button>
                                <!-- Mensaje de confirmación -->
                                <p v-if="successMessage" class="success">{{ successMessage }}</p>
                                <!-- Cancelar -->
                                <button type="button"
                                        class="inline-block w-full rounded-lg bg-[#C62828] px-5 py-3 font-medium text-white sm:w-auto hover:bg-red-400"
                                        @click="closeForm">
                                    Cancelar
                                </button>
                            </div>
                       
                    </form>
                </div>
            </section>
        
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, watch } from 'vue';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  cita: Object
});

const successMessage = ref('');
const errors = ref({});

const form = useForm({
  mascota: props.cita.mascota.mascota,
  especie: props.cita.mascota.especie,  // No actualizar
  raza: props.cita.mascota.raza,        // No actualizar
  sexo: props.cita.mascota.sexo,        // No actualizar
  fecha_nacimiento: props.cita.mascota.fecha_nacimiento,
  peso: props.cita.mascota.peso,        // No actualizar
  nombre: props.cita.propietario.nombre,
  celular: props.cita.propietario.celular,
  telefono: props.cita.propietario.telefono,
  direccion: props.cita.propietario.direccion,
  servicio: props.cita.servicio.servicio,
  hora: props.cita.servicio.hora,
  fecha: props.cita.servicio.fecha,
  transporte: props.cita.transporte, 
  comentario: props.cita.comentario,    // No actualizar
  estado: props.cita.id_estado,
});

const submitForm = () => {
  form.put(route('citas.update', props.cita.id), {
    onSuccess: (response) => {
      successMessage.value = 'Cita actualizada exitosamente!';
      errors.value = {}; // Resetear los errores
      // Actualizar el formulario con los datos más recientes del servidor
      form.defaults();
    },
    onError: (formErrors) => {
      errors.value = formErrors;
    },
    onFinish: () => {
      form.processing = false;
    },
  });
};

// Monitorea cambios en los errores y oculta el mensaje de éxito si hay errores
watch(errors, (newErrors) => {
  if (Object.keys(newErrors).length > 0) {
    successMessage.value = '';
  }
});

// Cancelar regresar a tabla de citas
const closeForm = () => {
     window.history.back();
}

</script>

<style scoped>
.error {
    font-size: small;
  color: red;
}
.success {
    font-size: small;
  color: green;
}
</style>