<template>
  <h1>Formulario de Cita Veterinaria</h1>
  <p>Por favor, complete el siguiente formulario para agendar una cita para su mascota.</p>
  <form action="enviar_formulario.php" method="post">
    <h2>Información de la mascota</h2>
    <ul>
      <li>
        <label for="nombre_mascota">Nombre de la mascota:</label>
        <input type="text" id="nombre_mascota" name="nombre_mascota" required>
      </li>
      <li>
        <label for="especie">Especie:</label>
        <select id="especie" name="especie" required>
          <option value="">Seleccione una especie</option>
          <option value="perro">Perro</option>
          <option value="gato">Gato</option>
          <option value="conejo">Conejo</option>
          <option value="hamster">Hamster</option>
          <option value="ave">Ave</option>
          <option value="reptil">Reptil</option>
          <option value="otro">Otro</option>
        </select>
      </li>
      <li>
        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza">
      </li>
      <li>
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
          <option value="">Seleccione un sexo</option>
          <option value="macho">Macho</option>
          <option value="hembra">Hembra</option>
        </select>
      </li>
      <li>
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
      </li>
      <li>
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" required>
      </li>
      <li>
        <label for="microchip">¿Tiene microchip?</label>
        <select id="microchip" name="microchip" required>
          <option value="">Seleccione una opción</option>
          <option value="si">Sí</option>
          <option value="no">No</option>
        </select>
      </li>
    </ul>
    <h2>Información del propietario</h2>
    <ul>
      <li>
        <label for="nombre_propietario">Nombre completo:</label>
        <input type="text" id="nombre_propietario" name="nombre_propietario" required>
      </li>
      <li>
        <label for="telefono">Número de teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
      </li>
      <li>
        <label for="correo_electronico">Correo electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" required>
      </li>
      <li>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
      </li>
      <li>
        <label for="codigo_postal">Código postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal">
      </li>
    </ul>
    <h2>Motivo de la cita</h2>
    <ul>
      <li>
        <label for="motivo_cita">¿Por qué necesita su mascota una cita?</label>
        <textarea id="motivo_cita" name="motivo_cita" required></textarea>
      </li>
      <li>
        <label for="sintomas">Describa los síntomas o problemas que presenta su mascota:</label>
        <textarea id="sintomas" name="sintomas" required></textarea>
       </li>
      <li>
        <label for="cambios_comportamiento">¿Ha notado algún cambio en el comportamiento de su mascota?</label>
        <select id="cambios_comportamiento" name="cambios_comportamiento" required>
          <option value="">Seleccione una opción</option>
          <option value="si">Sí</option>
          <option value="no">No</option>
        </select>
      </li>
      <li>
        <label for="enfermedades_recientes">¿Su mascota ha tenido alguna enfermedad o condición médica reciente?</label>
        <textarea id="enfermedades_recientes" name="enfermedades_recientes"></textarea>
      </li>
    </ul>
    <h2>Información adicional</h2>
    <ul>
      <li>
        <label for="alergias">¿Su mascota tiene alguna alergia?</label>
        <textarea id="alergias" name="alergias"></textarea>
      </li>
      <li>
        <label for="medicamentos">¿Su mascota está tomando algún medicamento?</label>
        <textarea id="medicamentos" name="medicamentos"></textarea>
      </li>
      <li>
        <label for="seguro_veterinario">¿Su mascota tiene seguro veterinario?</label>
        <select id="seguro_veterinario" name="seguro_veterinario" required>
          <option value="">Seleccione una opción</option>
          <option value="si">Sí</option>
          <option value="no">No</option>
        </select>
      </li>
    </ul>
    <h2>Fecha y hora preferida</h2>
    <ul>
      <li>
        <label for="fecha_cita">¿En qué fecha le gustaría agendar la cita?</label>
        <input type="date" id="fecha_cita" name="fecha_cita" required>
      </li>
      <li>
        <label for="hora_cita">¿En qué horario le gustaría agendar la cita?</label>
        <select id="hora_cita" name="hora_cita" required>
          <option value="">Seleccione un horario</option>
          <option value="08:00">08:00 - 09:00</option>
          <option value="09:00">09:00 - 10:00</option>
          <option value="10:00">10:00 - 11:00</option>
          <option value="11:00">11:00 - 12:00</option>
          <option value="12:00">12:00 - 13:00</option>
          <option value="14:00">14:00 - 15:00</option>
          <option value="15:00">15:00 - 16:00</option>
          <option value="16:00">16:00 - 17:00</option>
          <option value="17:00">17:00 - 18:00</option>
        </select>
      </li>
    </ul>
    <h2>Comentarios adicionales</h2>
    <p>Si tiene alguna pregunta o comentario adicional, no dude en escribirlo aquí.</p>
    <textarea id="comentarios_adicionales" name="comentarios_adicionales"></textarea>
    <p>
      <input type="submit" value="Enviar formulario">
      <input type="reset" value="Limpiar formulario">
    </p>
  </form>
  <p>
    **Política de cancelación:**
  </p>
  <p>
    Le recordamos que para cancelar o reprogramar una cita, debe hacerlo con al menos 24 horas de anticipación. De lo contrario, se le podría cobrar una tarifa por cancelación.
  </p>
  <p>
    **Al enviar este formulario, usted acepta las condiciones de la política de cancelación.**
  </p>
  <p>
    **Gracias por elegir Happy Pets para el cuidado de su mascota.**
  </p>
  <p>
    **Un representante de nuestra clínica se pondrá en contacto con usted para confirmar su cita.**
  </p>


</template>