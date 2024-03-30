<script setup>
import DarkIcon from "./DarkIcon.vue";
import PawIcon from "./PawIcon.vue";

const props = defineProps({
    loginUrl: String,
});

</script>

<template>
        <header
            class="p-5 dark:bg-gray-800 bg-white shadow dark:shadow-gray-700 md:flex md:items-center md:justify-between"
        >
            <!-- logo -->
            <div class="flex justify-between items-center">
                <span class="dark:text-white text-2xl cursor-pointer">
                    <PawIcon />
                    Happy Pets
                </span>

                <!-- Icon mobile -->
                <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                    <ion-icon name="menu"></ion-icon>
                </span>
            </div>

            <!-- Menu -->
            <ul
                id="mobile-menu"
                class="md:flex md:items-center z-[-1] md:z-auto md:static absolute dark:bg-gray-800 dark:text-white bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]"
            >
                <li class="mx-4 my-6 md:my-0 transition-all ease-in duration-500">
                    <a href="">Inicio</a>
                </li>

                <li class="mx-4 my-6 md:my-0 transition-all ease-in duration-500">
                    <a href="">Servicios</a>
                </li>

                <li class="mx-4 my-6 md:my-0 transition-all ease-in duration-500">
                    <a href="">Nosotros</a>
                </li>

                <li class="mx-4 my-6 md:my-0 transition-all ease-in duration-500">
                    <a href="">Conctacto</a>
                </li>
                <!-- Icon Dark mode -->
                <DarkIcon />
                <!-- Boton de Dashboard -->
                <div
                    class="cursor-pointer bg-[#3e9392] text-white duration-500 px-6 py-2 mx-4 hover:bg-[##71b5b7] rounded">
                    <a :href="loginUrl">Log in</a>
                </div>
            </ul>
        </header>
</template>