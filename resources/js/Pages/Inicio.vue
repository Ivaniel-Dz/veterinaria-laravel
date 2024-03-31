<script setup>
import Menu from "./Template/Menu.vue";
import inicio from "./Portada.vue";
import servicio from "./Servicio.vue";
//Recibe el parametro de web.php
const props = defineProps({
    loginUrl: String,
});

</script>

<template>
    <div class="dark:bg-gray-800">
        <Menu :loginUrl="loginUrl"/> <!---Envia el parametro al componente Menu -->
        <inicio/>
        <servicio/>
    </div>
</template>
