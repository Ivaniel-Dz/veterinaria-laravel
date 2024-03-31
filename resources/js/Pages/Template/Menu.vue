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
        class="p-5 dark:bg-gray-800 bg-white shadow dark:shadow-gray-700 md:flex md:items-center md:justify-between sticky top-0">
        <!-- logo -->
        <div class="flex justify-between items-center">
            <span class="dark:text-white text-2xl cursor-pointer">
                <PawIcon />
                Happy Pets
            </span>

            <!-- Icon mobile -->
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" @click="Menu(this)"></ion-icon>
            </span>
        </div>

        <!-- Opciones -->
        <ul
            id="mobile-menu"
            class="md:flex md:items-center dark:text-white z-[-1] md:z-auto md:static absolute dark:bg-gray-800 bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px]"
        >
            <li class="mx-4 my-6 md:my-0">
                <a
                    href="#inicio"
                    class="text-[16px] hover:text-[#3e9392] transition-all ease-in duration-500"
                >
                    Inicio
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a
                    href="#servicio"
                    class="text-[16px] hover:text-[#3e9392] transition-all ease-in duration-500"
                >
                    Servicio
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a
                    href="#nosotros"
                    class="text-[16px] hover:text-[#3e9392] transition-all ease-in duration-500"
                >
                    Nosotros
                </a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a
                    href="#contacto"
                    class="text-[16px] hover:text-[#3e9392] transition-all ease-in duration-500"
                >
                    Contacto
                </a>
            </li>

            <!-- Icon Dark mode -->
            <DarkIcon />
            <!-- Boton de Dashboard -->
            <button
                class="bg-[#3e9392] text-white duration-500 px-6 py-2 mx-4 hover:bg-[#71b5b7] rounded"
            >
                <a :href="loginUrl">Log in</a>
            </button>
        </ul>
    </header>
</template>
