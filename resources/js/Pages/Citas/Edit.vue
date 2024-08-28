<template>
    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div
                class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
            >
                <form action="#" class="space-y-4">
                    <!-- Información del Dueño -->
                    <div v-if="cita">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="name"
                                    >Nombre del Dueño</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Nombre del Dueño"
                                    type="text"
                                    id="name"
                                    v-model="cita.propietario.nombre"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="direccion"
                                    >Dirección</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Dirección"
                                    type="text"
                                    id="direccion"
                                    v-model="cita.propietario.direccion"
                                />
                            </div>
                        </div>

                        <!-- Conctacto -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="phone"
                                    >Numero de Telefono</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Numero de Telefonor"
                                    type="tel"
                                    id="phone"
                                    v-model="cita.propietario.telefono"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="celular"
                                    >Numero de Celular</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Numero de Celular"
                                    type="tel"
                                    id="celular"
                                    v-model="cita.propietario.celular"
                                />
                            </div>
                        </div>

                        <!-- Informacion de la Mascota -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="mascota"
                                    >Nombre de la Mascota</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Nombre de la Mascota"
                                    type="text"
                                    id="mascota"
                                    v-model="cita.mascota.mascota"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="fecha_nacimiento"
                                    >Fecha de Nacimiento</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Fecha de Nacimiento"
                                    type="date"
                                    id="fecha_nacimiento"
                                    v-model="cita.mascota.fecha_nacimiento"
                                />
                            </div>
                        </div>

                        <!-- Servicio -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="transporte"
                                    >Transporte</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Transporte"
                                    type="text"
                                    id="transporte"
                                    v-model="cita.transporte"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="servicio"
                                    >Servicio</label
                                >
                                <select id="servicio" v-model="cita.servicio.servicio" class=" w-full rounded-lg border-gray-200 p-3 text-sm">
                                    <option :value="cita.servicio.servicio">
                                        {{ cita.servicio.servicio }}
                                    </option>
                                    <option value="Consulta general" v-if="cita.servicio.servicio !== 'Consulta general' ">
                                        Consulta general
                                    </option>
                                    <option value="Vacunación" v-if="cita.servicio.servicio !== 'Vacunación' ">
                                        Vacunación
                                    </option>
                                    <option value="Desparasitación" v-if="cita.servicio.servicio !== 'Desparasitación' ">
                                        Desparasitación
                                    </option>
                                    <option value="Cirugía" v-if="cita.servicio.servicio !== 'Cirugía' ">
                                        Cirugía
                                    </option>
                                    <option value="Odontología" v-if="cita.servicio.servicio !== 'Odontología' ">
                                        Odontología
                                    </option>
                                    <option value="Peluquería" v-if="cita.servicio.servicio !== 'Peluquería' ">
                                        Peluquería
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Horario -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="fecha"
                                    >Fecha de la Cita</label
                                >
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Fecha de la Cita"
                                    type="date"
                                    id="fecha"
                                    v-model="cita.servicio.fecha"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="hora">Hora</label>
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Hora de la Cita"
                                    type="time"
                                    id="hora"
                                    v-model="cita.servicio.hora"
                                />
                            </div>
                        </div>

                        <!-- Estado -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 pb-4">
                            <div>
                                <label class="sr-only" for="estado"
                                    >Estado</label
                                >
                                <select name="estado" id="estado" v-model="cita.id_estado" class=" w-full rounded-lg border-gray-200 p-3 text-sm">
                                    <option :value="cita.id_estado"  v-if="cita.id_estado === 1"> 
                                        Pendiente
                                    </option>
                                     <option :value="cita.id_estado"  v-if="cita.id_estado === 2"> 
                                        Atendido
                                    </option>
                                    <option :value="cita.id_estado"  v-if="cita.id_estado === 3"> 
                                        Cancelado
                                    </option>
                                    <option :value="cita.id_estado"  v-if="cita.id_estado === 4"> 
                                        Pospuesto
                                    </option>
                                    <option value="1" v-if="cita.id_estado !== 1">Pendiente</option>
                                    <option value="2" v-if="cita.id_estado !== 2">Atendido</option>
                                    <option value="3" v-if="cita.id_estado !== 3">Cancelado</option>
                                    <option value="4" v-if="cita.id_estado !== 4">Pospuesto</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Botones -->
                        <div class="mt-4">
                            <button
                                class="inline-block w-full rounded-lg bg-[#111827] px-5 mx-5 py-3 font-medium text-white sm:w-auto hover:bg-gray-600"
                                type="submit"
                            >
                                Actualizar
                            </button>
                            <button
                                class="inline-block w-full rounded-lg bg-[#C62828] px-5 py-3 font-medium text-white sm:w-auto hover:bg-red-400"
                                type="button"
                                @click="resetForm"
                            >
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script setup>
//`defineProps` es una macro del compilador y ya no es necesario importarla.

// Los props utilizando en Edit
const props = defineProps({
    resetForm: {
        type: Function, // Funcion para abrir el form
        required: true,
    },
    cita: {
        type: Object, // DAtos de la fila
    },
});
</script>
