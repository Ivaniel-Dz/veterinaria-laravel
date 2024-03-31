<script setup>
import Menu from "./Template/Menu.vue";
import Inicio from "./Portada.vue";
import Servicio from "./Servicio.vue";
import Nosotros from "./Nosotros.vue";
import Cita from "./Cita.vue";
import Contacto from "./Contacto.vue";
import Footer from "./Template/Footer.vue";

//Recibe el parametro de web.php
const props = defineProps({
    loginUrl: String,
});

</script>

<template>
    <div class="dark:bg-gray-800 bg-[#FBFBFE]">
        <Menu :loginUrl="loginUrl"/> <!---Envia el parametro al componente Menu -->
        <Inicio/>
        <Servicio/>
        <Nosotros/>
        <Cita/>
        <Contacto/>
        <Footer/>
    </div>
</template>
