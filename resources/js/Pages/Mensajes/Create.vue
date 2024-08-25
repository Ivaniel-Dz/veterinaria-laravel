<template>
    <div
        class="shadow dark:bg-gray-700 bg-gray-100 rounded-lg lg:w-1/3 md:w-1/2 flex flex-col mx-4 md:ml-auto w-full md:py-8 lg:px-8 mt-8 md:mt-0"
    >
        <h2
            class="text-gray-900 text-lg mb-1 font-medium title-font dark:text-white"
        >
            ¿Tienes alguna duda? Escríbenos
        </h2>
        <form @submit.prevent="submitForm">
            <input type="hidden" name="_token" :value="csrfToken" />
            <div class="relative mb-4">
                <label
                    for="name"
                    class="leading-7 text-sm text-gray-600 dark:text-white"
                    >Nombre</label
                >
                <input
                    type="text"
                    id="name"
                    v-model="form.nombre"
                    class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
            </div>

            <div class="relative mb-4">
                <label
                    for="email"
                    class="leading-7 text-sm text-gray-600 dark:text-white"
                    >Email</label
                >
                <input
                    type="email"
                    id="email"
                    v-model="form.email"
                    class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
            </div>

            <div class="relative mb-4">
                <label
                    for="message"
                    class="leading-7 text-sm text-gray-600 dark:text-white"
                    >Mensaje</label
                >
                <textarea
                    id="message"
                    v-model="form.descripcion"
                    class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                ></textarea>
            </div>

            <button
                type="submit"
                class="text-white bg-[#3E9392] border-0 py-2 px-6 focus:outline-none hover:bg-[#45AB97] rounded text-lg"
            >
                Enviar
            </button>
        </form>
    </div>
</template>

<script setup>
import { reactive, ref } from 'vue';

const form = reactive({
  nombre: '',
  email: '',
  descripcion: ''
});

const csrfToken = ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

const submitForm = async () => {
  try {
    const response = await fetch('/mensajes', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken.value
      },
      body: JSON.stringify(form)
    });

    if (response.ok) {
      const result = await response.json();
      alert('Mensaje enviado exitosamente');
      form.nombre = '';
      form.email = '';
      form.descripcion = '';
    } else {
      console.error('Error al enviar el formulario:', response.statusText);
      alert('Hubo un error al enviar el formulario. Por favor, inténtelo de nuevo.');
    }
  } catch (error) {
    console.error('Error en la solicitud:', error);
    alert('Hubo un error en la conexión. Por favor, inténtelo de nuevo.');
  }
};
</script>