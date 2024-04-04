<template>
    <Head title="Service" />

    <AuthenticatedLayout>
        <template #header>
            Servicio
        </template>

        <!-- Tabla de mensajes -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                Tabla de servicio
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>
