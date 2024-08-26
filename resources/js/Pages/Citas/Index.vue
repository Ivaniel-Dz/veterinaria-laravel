<template>
    <Head title="Citas -" />

    <AuthenticatedLayout>
        <!-- Tabla de Registro de Citas -->
        <section
            v-if="!editingCita"
            class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
        >
            <!-- Component -->
            <section class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <!-- Titulo -->
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight">
                            Mensajes
                        </h2>
                    </div>

                    <!-- Select and Input -->
                    <div class="my-2 flex sm:flex-row flex-col">
                        <!-- Select -->
                        <div class="flex flex-row mb-1 sm:mb-0">
                            <div class="relative">
                                <select
                                    class="h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                >
                                    <option>5</option>
                                    <option>10</option>
                                    <option>20</option>
                                </select>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="block relative">
                            <!-- Icon -->
                            <span
                                class="h-full absolute inset-y-0 left-0 flex items-center pl-2"
                            >
                                <svg
                                    viewBox="0 0 24 24"
                                    class="h-4 w-4 fill-current text-gray-500"
                                >
                                    <path
                                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                                    ></path>
                                </svg>
                            </span>
                            <!-- Input -->
                            <input
                                placeholder="Search"
                                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
                            />
                        </div>
                    </div>

                    <!-- Tabla -->
                    <div
                        class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto"
                    >
                        <div
                            class="inline-block min-w-full shadow rounded-lg overflow-hidden"
                        >
                            <table class="min-w-full leading-normal">
                                <!-- Encabezado -->
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            N°
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Dueño
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Mascota
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Servicio
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Transporte
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Comentario
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Fecha
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Hora
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Estado
                                        </th>

                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                        >
                                            Acción
                                        </th>
                                    </tr>
                                </thead>

                                <!-- Tabla de Contenido -->
                                <tbody>
                                    <!-- Cantidad  -->
                                    <tr
                                        v-for="cita in citas.data"
                                        :key="cita.id"
                                    >
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p
                                                        class="text-gray-900 whitespace-no-wrap"
                                                    >
                                                        {{ cita.id }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Dueño Nombre -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p
                                                        class="text-gray-900 whitespace-no-wrap"
                                                    >
                                                        {{
                                                            cita.propietario
                                                                .nombre
                                                        }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Nombre mascota -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.mascota.mascota }}
                                            </p>
                                        </td>

                                        <!-- Servicio -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.servicio.servicio }}
                                            </p>
                                        </td>

                                        <!-- Transporte -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.transporte }}
                                            </p>
                                        </td>

                                        <!-- Comentario -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.comentario }}
                                            </p>
                                        </td>

                                        <!-- Fecha -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.servicio.fecha }}
                                            </p>
                                        </td>

                                        <!-- Hora -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <p
                                                class="text-gray-900 whitespace-no-wrap"
                                            >
                                                {{ cita.servicio.hora }}
                                            </p>
                                        </td>

                                        <!-- Estado -->
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold leading-tight"
                                            >
                                                <span
                                                    aria-hidden
                                                    class="absolute inset-0 bg-gray-300 opacity-50 rounded-full"
                                                ></span>

                                                <span
                                                    class="relative text-orange-900"
                                                    v-if="cita.id_estado === 1"
                                                    >Pendiente</span
                                                >
                                                <span
                                                    class="relative text-green-900"
                                                    v-else-if="
                                                        cita.id_estado === 2
                                                    "
                                                    >Atendido</span
                                                >
                                                <span
                                                    class="relative text-red-900"
                                                    v-else-if="
                                                        cita.id_estado === 3
                                                    "
                                                    >Cancelado</span
                                                >
                                                <span
                                                    class="relative"
                                                    v-else-if="
                                                        cita.id_estado === 4
                                                    "
                                                    >Pospuesto</span
                                                >
                                                <span class="relative" v-else
                                                    >Desconocido</span
                                                >
                                                <!-- En caso de que no coincida con ningún estado -->
                                            </span>
                                        </td>

                                        <!-- Botones de accion -->
                                        <td
                                            class="border-b border-gray-200 bg-white px-5 py-5 text-sm flex inline-block"
                                        >
                                            <button
                                                class="hover:text-red-900"
                                                @click="editCita(cita)"
                                            >
                                                <IconEdit
                                                    class="hover:stroke-[#0980f0]"
                                                />
                                            </button>

                                            <button
                                                class="hover:text-red-900"
                                                @click="openModal(cita.id)"
                                            >
                                                <IconTrash
                                                    class="hover:stroke-[#d51818]"
                                                />
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Pagination -->
                            <div
                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
                            >
                                <span class="text-xs xs:text-sm text-gray-900">
                                    Showing 1 to 4 of 50 Entries
                                </span>
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <button
                                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l"
                                    >
                                        Prev
                                    </button>
                                    <button
                                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r"
                                    >
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div
                v-if="showModal"
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
            >
                <div class="bg-white p-6 rounded shadow-md">
                    <h3 class="text-lg text-gray-900 font-semibold mb-4">
                        ¿Estás seguro de que quieres eliminar este mensaje?
                    </h3>
                    <div class="flex justify-end">
                        <button
                            @click="confirmDelete"
                            class="bg-red-500 text-white px-4 py-2 rounded mr-2 hover:bg-[#d51818]"
                        >
                            Eliminar
                        </button>
                        <button
                            @click="closeModal"
                            class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400"
                        >
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        
        </section>

        <!-- Edicion de Registro de Citas -->
        <section v-else>
            <section class="bg-gray-100">
                <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                    <div
                        class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12"
                    >
                        <form action="#" class="space-y-4">
                            <div>
                                <label class="sr-only" for="name">Name</label>
                                <input
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Name"
                                    type="text"
                                    id="name"
                                />
                            </div>

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="sr-only" for="email"
                                        >Email</label
                                    >
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Email address"
                                        type="email"
                                        id="email"
                                    />
                                </div>

                                <div>
                                    <label class="sr-only" for="phone"
                                        >Phone</label
                                    >
                                    <input
                                        class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                        placeholder="Phone Number"
                                        type="tel"
                                        id="phone"
                                    />
                                </div>
                            </div>

                            <div
                                class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3"
                            >
                                <div>
                                    <label
                                        for="Option1"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0"
                                    >
                                        <input
                                            class="sr-only"
                                            id="Option1"
                                            type="radio"
                                            tabindex="-1"
                                            name="option"
                                        />

                                        <span class="text-sm"> Option 1 </span>
                                    </label>
                                </div>

                                <div>
                                    <label
                                        for="Option2"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0"
                                    >
                                        <input
                                            class="sr-only"
                                            id="Option2"
                                            type="radio"
                                            tabindex="-1"
                                            name="option"
                                        />

                                        <span class="text-sm"> Option 2 </span>
                                    </label>
                                </div>

                                <div>
                                    <label
                                        for="Option3"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0"
                                    >
                                        <input
                                            class="sr-only"
                                            id="Option3"
                                            type="radio"
                                            tabindex="-1"
                                            name="option"
                                        />

                                        <span class="text-sm"> Option 3 </span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <label class="sr-only" for="message"
                                    >Message</label
                                >

                                <textarea
                                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                    placeholder="Message"
                                    rows="8"
                                    id="message"
                                ></textarea>
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
        </section>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import IconEdit from "../Icons/Edit.vue";
import IconTrash from "../Icons/Trash.vue";

const props = defineProps({
    citas: {
        type: Object,
    },
});

//Codigo para Actualizar
const editingCita = ref(false);

// Rellena el form con los datos de la cita seleccionado
function editCita() {
    editingCita.value = true; //Muestra el formulario de ediccion
}

//Envia el form
function submitForm() {
    editingCita.value = false; //Oculta el form
}

// Resetea el form al cancelar
function resetForm() {
    editingCita.value = false; // Oculta el form
}

/*********** Eliminar Filas **********************/
const showModal = ref(false);
const citaId = ref(null);

// Abrir modal
function openModal(id) {
    citaId.value = id;
    showModal.value = true;
}

// Cerrar modal
function closeModal() {
    showModal.value = false;
    citaId.value = null;
}

// Confirmar eliminación
function confirmDelete() {
    if (citaId.value) {
        Inertia.delete(route("citas.destroy", citaId.value), {
            onFinish: () => {
                window.location.reload(); // Recargar la página después de eliminar
            },
        });
    }
    closeModal();
}
</script>
