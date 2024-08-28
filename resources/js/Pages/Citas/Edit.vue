<template>
    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div
                class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
            >
                <form action="#" class="space-y-4">
                    <!-- Información del Dueño -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="name">Nombre del Dueño</label>
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Nombre del Dueño"
                                type="text"
                                id="name"
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
                            />
                        </div>
                    </div>

                    <!-- Conctacto -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="phone"
                                >Numero de Telefono</label
                            >
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Numero de Telefonor"
                                type="tel"
                                id="phone"
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
                            />
                        </div>
                    </div>

                    <!-- Informacion de la Mascota -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="mascota"
                                >Nombre de la Mascota</label
                            >
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Nombre de la Mascota"
                                type="text"
                                id="mascota"
                            />
                        </div>

                        <div>
                            <label class="sr-only" for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Fecha de Nacimiento"
                                type="date"
                                id="fecha_nacimiento"
                            />
                        </div>
                    </div>

                    <!-- Servicio -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label class="sr-only" for="transporte"
                                >Transporte</label
                            >
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Transporte"
                                type="text"
                                id="transporte"
                            />
                        </div>

                        <div>
                            <label class="sr-only" for="servicio"
                                >Servicio</label
                            >
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Servicio"
                                type="text"
                                id="servicio"
                            />
                        </div>
                    </div>

                    <!-- Horario -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <div>
                            <label class="sr-only" for="fecha"
                                >Fecha de la Cita</label
                            >
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Fecha de la Cita"
                                type="date"
                                id="fecha"
                            />
                        </div>

                        <div>
                            <label class="sr-only" for="hora">Hora</label>
                            <input
                                class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Hora de la Cita"
                                type="time"
                                id="hora"
                            />
                        </div>

                        <div>
                            <label class="sr-only" for="estado">Estado</label>
                            <select name="estado" id="estado">
                                <option value="">Pendiente</option>
                                <option value="">Atendido</option>
                                <option value="">Cancelado</option>
                                <option value="">Pospuesto</option>
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
                </form>
            </div>
        </div>
    </section>
</template>

<script setup>
//`defineProps` es una macro del compilador y ya no es necesario importarla.

// Definir las props utilizando defineProps
const props = defineProps({
    resetForm: {
        type: Function, // Asegúrate de que la prop sea una función
        required: true,
    },
});
</script>
