
<template>

    <h2 class="dark:text-white sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 px-4  md:px-[115px] lg:px-[115px]">Servicios</h2>

    <section id="servicios" class="dark:text-white w-full h-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 px-4 md:px-[100px] lg:px-[100px]">

        <figure v-for="servicio in servicios" :key="servicio.servicio" class="md:p-4 shadow dark:bg-gray-700 bg-gray-100 p-6 rounded-lg">
            <div class="flex items-center justify-center">
                <img :src="servicio.imagen" alt="imagen" class="w-[250px] h-[200px] rounded-lg mb-4"/>
            </div>
            <h2 class="text-lg font-medium title-font mb-2">{{ servicio.servicio }}</h2>
            <p class="leading-relaxed text-base">{{ servicio.descripcion }}</p>
        </figure>

    </section>

</template>

<script setup>
import { servicios } from '../servicios.js';
</script>
