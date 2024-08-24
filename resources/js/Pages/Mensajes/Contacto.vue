<script setup>
import FormMensaje from "./Create.vue";
import PortadaContact from "./PortadaContact.vue";
</script>

<template>
    <section id="contacto" class="text-gray-600 body-font">
        <div class="container py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <!-- Portada -->
            <PortadaContact />

            <!-- form -->
            <FormMensaje />
        </div>
    </section>
</template>

<style scoped>
.portada {
    background-image: url(../../../../public/img/local.jpg);
    background-size: cover;
}
</style>
