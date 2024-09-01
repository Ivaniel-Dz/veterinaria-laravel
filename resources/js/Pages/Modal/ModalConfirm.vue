<template>
  <div v-if="visible" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded shadow-md">
      <h3 class="text-lg text-gray-900 font-semibold mb-4">
        {{ message }}
      </h3>
      <div class="flex justify-end">
        <button @click="eliminar" class="bg-red-500 text-white px-4 py-2 rounded mr-2 hover:bg-[#d51818]">
          Eliminar
        </button>

        <button @click="close" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
          Cancelar
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  visible: Boolean, // Para controlar la visibilidad del modal
  message: String, // Mensaje del modal
  eliminar: Function, // Función para eliminar
  close: Function, // Función para cerrar el modal
});
</script>
