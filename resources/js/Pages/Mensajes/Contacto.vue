<script setup>
import FormMensaje from "./Create.vue";
import PortadaContact from "./PortadaContact.vue";
</script>

<template>
    <section id="contacto" class="text-color-text body-font">
        <div class="px-size-mobile md:px-size-tablet lg:px-size-desk py-24 flex sm:flex-nowrap flex-wrap">
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
