<script setup>
import NavLink from "@/Components/NavLink.vue";
import PawIcon from "@/Pages/LandingPage/Layouts/PawIcon.vue";
import { ref } from "vue";

let showingTwoLevelMenu = ref(false);
</script>

<template>
    <div
        :class="$page.props.showingMobileMenu ? 'block' : 'hidden'"
        @click="$page.props.showingMobileMenu = false"
        class="fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden">
    </div>

    <aside
        :class="
            $page.props.showingMobileMenu
                ? 'translate-x-0 ease-out'
                : '-translate-x-full ease-in'
        "
        class="overflow-y-auto fixed inset-y-0 left-0 z-30 w-64 bg-color-dark transition duration-300 transform lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex justify-center items-center mt-8">
            <!-- logo -->
            <div class="flex items-center">
                <PawIcon class="stroke-white" />
                <span class="mx-2 text-2xl font-semibold text-white"
                    >Happy Pets
                </span>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-10" x-data="{ isMultiLevelMenuOpen: false }">
            
            <!-- Registro de citas -->
            <nav-link
                :href="route('citas.index')"
                :active="route().current('citas.index')"
            >
                <template #icon>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            d="M4.615 21q-.69 0-1.152-.462Q3 20.075 3 19.385V8.615q0-.69.463-1.152Q3.925 7 4.615 7H9V5.615q0-.69.463-1.152Q9.925 4 10.615 4h2.77q.69 0 1.153.463q.462.462.462 1.152V7h4.385q.69 0 1.152.463q.463.462.463 1.152v10.77q0 .69-.462 1.152q-.463.463-1.153.463zM10 7h4V5.615q0-.23-.192-.423Q13.615 5 13.385 5h-2.77q-.23 0-.423.192q-.192.193-.192.423zm1.5 7.5v3h1v-3h3v-1h-3v-3h-1v3h-3v1z"
                        />
                    </svg>
                </template>
                Citas
            </nav-link>

            <!-- Users: Veterinarios -->
            <nav-link
                :href="route('users.index')"
                :active="route().current('users.index')"
            >
                <template #icon>
                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        ></path>
                    </svg>
                </template>
                Veterinarios
            </nav-link>

            <!-- Mensajes -->
            <nav-link
                :href="route('mensajes.index')"
                :active="route().current('mensajes.index')"
            >
                <template #icon>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"
                        />
                    </svg>
                </template>
                Mensajes
            </nav-link>

            <!-- Servicio -->
            <nav-link
                :href="route('service')"
                :active="route().current('service')"
            >
                <template #icon>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            d="M4.615 21q-.69 0-1.152-.462Q3 20.075 3 19.385V8.615q0-.69.463-1.152Q3.925 7 4.615 7H9V5.615q0-.69.463-1.152Q9.925 4 10.615 4h2.77q.69 0 1.153.463q.462.462.462 1.152V7h4.385q.69 0 1.152.463q.463.462.463 1.152v10.77q0 .69-.462 1.152q-.463.463-1.153.463zM10 7h4V5.615q0-.23-.192-.423Q13.615 5 13.385 5h-2.77q-.23 0-.423.192q-.192.193-.192.423zm1.5 7.5v3h1v-3h3v-1h-3v-3h-1v3h-3v1z"
                        />
                    </svg>
                </template>
                Servicios
            </nav-link>
        </nav>
        <!--Fin Menu -->
    </aside>
</template>
