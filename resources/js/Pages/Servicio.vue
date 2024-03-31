
<template>

    <h2 class="dark:text-white text-2xl font-semibold pt-8 pb-1 px-4 md:text-3xl md:px-[150px] lg:px-[250px]">Servicios</h2>
    <section id="servicios" class="dark:text-white w-full h-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 px-4 md:px-[150px] lg:px-[250px]">

        <figure v-for="servicio in servicios" :key="servicio.servicio" class="pr-4 md:px-0 rounded shadow dark:shadow-gray-700">
            <div class="flex items-center justify-center">
                <img :src="servicio.imagen" alt="imagen" class="w-[250px] h-[200px] rounded-lg"/>
            </div>
            <h2 class="text-lg md:text-xl font-semibold">{{ servicio.servicio }}</h2>
            <p class="text-sm md:text-base">{{ servicio.descripcion }}</p>
        </figure>

    </section>

</template>

<script setup>
import { servicios } from '../servicios.js';
</script>
