<script setup>
import DarkIcon from "./DarkIcon.vue";
import PawIcon from "./PawIcon.vue";
// Recibe el paremetro de Inico.vue
const props = defineProps({
    loginUrl: String,
});

function Menu(e) {
    let list = document.getElementById("mobile-menu");
    e.name === "menu"
        ? // Cuando baja
          ((e.name = "close"),
          list.classList.add("top-[70px]"),
          list.classList.add("opacity-100"))
        : ((e.name = "menu"),
          // Cuando sube
          list.classList.remove("top-[70px]"),
          list.classList.remove("opacity-100"));
}
</script>

<template>
    
    <header
        class="py-5 md:pl-5 lg:px-28 dark:bg-color-dark bg-color-main shadow dark:shadow-gray-700 md:flex md:items-center md:justify-between sticky top-0">
        <!-- logo -->
        <div class="flex justify-between items-center">
            <span class="dark:text-color-text-dark text-color-text text-2xl font-medium">
                <PawIcon />
                Happy Pets
            </span>

            <!-- Icon mobile -->
            <span class="text-3xl cursor-pointer mx-2 md:hidden flex">
                <!-- Icon Dark mode -->
                <DarkIcon class="mr-4"/>
                <ion-icon name="menu" @click="Menu(this)"></ion-icon>
            </span>
        </div>

        <!-- Opciones -->
        <ul id="mobile-menu"
            class="md:flex md:items-center dark:text-color-text-dark text-color-text z-[-1] md:z-auto md:static absolute dark:bg-color-dark bg-color-main w-full font-medium left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]">

            <li class="mx-4 my-6 md:my-0">
                <a href="#inicio" class="text-[16px] hover:text-color-home transition-all ease-in duration-500">
                    Inicio
                </a>
            </li>

            <li class="mx-4 my-6 md:my-0">
                <a href="#servicio" class="text-[16px] hover:text-color-home transition-all ease-in duration-500">
                    Servicio
                </a>
            </li>

            <li class="mx-4 my-6 md:my-0">
                <a href="#nosotros" class="text-[16px] hover:text-color-home transition-all ease-in duration-500">
                    Nosotros
                </a>
            </li>

            <li class="mx-4 my-6 md:my-0">
                <a href="#contacto" class="text-[16px] hover:text-color-home transition-all ease-in duration-500">
                    Contacto
                </a>
            </li>

            <!-- Icon Dark mode -->
            <DarkIcon class="hidden md:flex"/>
            
            <!-- Boton de Dashboard -->
            <div>
                <a class="dark:bg-color-btn-dark dark:text-color-text bg-color-btn text-color-text-dark duration-500 px-6 py-2 mx-4 rounded btn-hover"
                :href="loginUrl">
                    Log in
                </a>
            </div>

        </ul>
    </header>

</template>
