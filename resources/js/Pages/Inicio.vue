<script setup>
import Menu from "./LandingPage/Layouts/Menu.vue";
import Home from "./LandingPage/Home.vue";
import Servicio from "./LandingPage/Servicio.vue";
import Nosotros from "./LandingPage/Nosotros.vue";
import Cita from "./Citas/Create.vue";
import Contacto from "./Mensajes/Contacto.vue";
import Footer from "./LandingPage/Layouts/Footer.vue";

//Recibe el parametro de web.php
const props = defineProps({
    loginUrl: String,
});
</script>

<template>
    <div class="dark:bg-color-dark bg-color-main">
        <Menu :loginUrl="loginUrl" />
        <!---Envia el parametro al componente Menu -->
        <Home />
        <Servicio />
        <Nosotros />
        <Cita />
        <Contacto />
        <Footer />
    </div>
</template>
