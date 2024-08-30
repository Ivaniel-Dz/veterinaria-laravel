<template>

    <section id="servicios" class=" px-size-mobile md:px-size-tablet lg:px-size-desk py-10">
        <h2 class="pb-5 text-3xl font-bold leading-5 dark:text-color-text-dark text-color-text">Servicios</h2>
        <div class="dark:text-white w-full h-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <figure
                v-for="servicio in servicios"
                :key="servicio.servicio"
                class="pb-3  shadow dark:bg-color-box-dark bg-color-box rounded-lg dark:text-color-text-dark text-color-text">
                <div class="mb-3">
                    <img :src="servicio.imagen" alt="imagen" class="object-cover w-full h-64 rounded-lg"/>
                </div>

                <h2 class="text-xl font-bold leading-5 mb-3 px-3">
                    {{ servicio.servicio }}
                </h2>

                <p class="leading-relaxed text-base px-3">
                    {{ servicio.descripcion }}
                </p>
            </figure>

        </div>
    </section>

</template>

<script setup>
//importa el API de los servicios que se ofrece
import { servicios } from "./servicios.js";
</script>
