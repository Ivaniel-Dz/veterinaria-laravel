<script setup>
import Menu from "./Template/Menu.vue";
//Recibe el parametro de web.php
const props = defineProps({
    loginUrl: String,
});

</script>

<template>
    <div class="bg-[#F8F6E3] dark:bg-gray-800 h-screen w-screen">
    <Menu :loginUrl="loginUrl"/> <!---Envia el parametro al componente Menu -->
        <main>hola</main>
    </div>
</template>
