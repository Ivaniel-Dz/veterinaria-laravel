<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pagination from '@/Components/Pagination.vue'
import { Head } from '@inertiajs/vue3';

const props = defineProps({
	users: {
		type: Object
	}
})
</script>

<template>
    <Head title="Veterinarios -" />

    <AuthenticatedLayout>
        <template #header>
            Veterinarios
        </template>

        <!-- Coontenedor -->
            <main class="flex flex-col">
                <section class="my-2 overflow-x-auto sm:-max-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 m-4 sm:rounded-lg">

                            <!-- Tabla -->
                            <table class="min-w-full divide-y divide-gray-200">
                                <!-- Encabezado -->
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Veterinario
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <!-- Contenido -->
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Fila -->
                                    <tr v-for="user in users.data" :key="user.id">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=user+name&background=random" alt="Some">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ user.name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ user.email }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">disponible</span>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <div class="flex flex-col items-center border-t bg-white px-5 py-5 xs:flex-row xs:justify-between">
                                <pagination :links="users.links" />
                            </div>

                        </div>
                    </div>
                    
                </section>
            </main>
            
    </AuthenticatedLayout>
</template>
