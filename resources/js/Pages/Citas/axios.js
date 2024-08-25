import { reactive, ref } from 'vue';

const form = reactive({
    mascota: "",
    especie: "",
    raza: "",
    sexo: "",
    fecha_nacimiento: "",
    peso: "",
    nombre: "",
    celular: "",
    telefono: "",
    direccion: "",
    servicio: "",
    transporte: "",
    fecha: "",
    hora: "",
    comentario: "",
});

const errors = ref({});

async function submitForm() {
  try {
    const response = await fetch('/citas', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(form),
    });

    if (!response.ok) {
      if (response.status === 422) {
        const errorData = await response.json();
        errors.value = errorData.errors;
      } else {
        throw new Error('Ocurrió un error al guardar la cita.');
      }
    } else {
      alert('¡Cita guardada exitosamente!');
      // Limpiar formulario después del envío
      Object.keys(form).forEach(key => form[key] = '');
      errors.value = {};
    }
  } catch (error) {
    alert(error.message);
  }
}
