<template>
  <div v-if="visible" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 flex items-center space-x-4">
      <!-- Ícono dinámico -->
      <div>
        <svg v-if="type === 'success'" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>

      <!-- Contenido del modal -->
      <div>
        <h2 class="text-xl font-bold mb-4">{{ title }}</h2>
        <p>{{ message }}</p>
      </div>
    </div>
  </div>
</template>


<script setup>
import { defineProps, defineEmits, watch } from 'vue';

const props = defineProps({
  visible: Boolean, // Para controlar la visibilidad del modal
  title: String, // Título del modal
  message: String, // Mensaje del modal
  type: String, // Tipo de mensaje (success o error)
});

const emit = defineEmits(['close']);

const closeModal = () => {
  emit('close');
};

// Observador para cerrar el modal después de 1.5 segundos cuando se muestra
watch(
  () => props.visible,
  (newValue) => {
    if (newValue) {
      setTimeout(() => {
        closeModal();
      }, 1500);
    }
  }
);
</script>