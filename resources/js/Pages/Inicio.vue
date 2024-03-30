<script setup>
// import DarkIcon from "./Template/DarkIcon.vue";
// import PawIcon from "./Template/PawIcon.vue";
import Menu from "./Template/Menu.vue";

const props = defineProps({
    loginUrl: String,
});
</script>

<template>
    <div class="bg-[#F8F6E3] dark:bg-gray-800 h-screen w-screen">
    <Menu/>
        <main>hola</main>
    </div>
</template>
