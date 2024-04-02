<template>
    <section class="m-4">
        <h2 class="text-2xl sm:text-3xl font-medium">Formulario de cita</h2>
        <p class="leading-relaxed text-base">
            Por favor, complete el siguiente formulario para agendar una cita
            para su mascota.
        </p>

        <form class="text-center relative mt-5" action="">
            <!-- barra de progreso -->
            <ul class="mb-[30px] overflow-hidden text-gray-400">
                <li class="active text-[#3E9392]  list-none text-base w-3/12 float-left relative font-semibold before:font-[FontAwesome] before:content-['\f6d3']">Mascota</li>
                <li class="list-none text-base w-3/12 float-left relative font-semibold before:font-[FontAwesome] before:content-['\f007'] ">Personal</li>
                <li class="list-none text-base w-3/12 float-left relative font-semibold before:font-[FontAwesome] before:content-['\f481']">Motivo</li>
                <li class="list-none text-base w-3/12 float-left relative font-semibold before:font-[FontAwesome] before:content-['\f00c']">Terminar</li>
            </ul>

            <!-- Información de la mascota -->
            <fieldset>
                <div class="text-center">
                    <!-- Encabezado -->
                    <div>
                        <h2 class="text-xl text-left">Información de la mascota</h2>
                        <h2 class="text-xl text-right">1 - 4</h2>
                    </div>

                    <!-- Entradas -->
                    <label for="mascota">Nombre de la mascota</label>
                    <input type="text" id="mascota" name="mascota" required />

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

                    <label for="raza">Raza:</label>
                    <input type="text" id="raza" name="raza" />

                    <label for="sexo">Sexo:</label>
                    <select id="sexo" name="sexo" required>
                        <option value="">Seleccione un sexo</option>
                        <option value="macho">Macho</option>
                        <option value="hembra">Hembra</option>
                    </select>

                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"/>

                    <label for="peso">Peso:</label>
                    <input type="number" id="peso" name="peso" />

                    <label for="microchip">¿Tiene microchip?</label>
                    <select id="microchip" name="microchip">
                        <option value="">Seleccione una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <!-- botones -->
                <input type="button" name="next" class="next" value="Next" />
            </fieldset>

            <!-- Informacion del dueño -->
            <fieldset>
                <div class="text-center">
                    <!-- Encabezado -->
                    <div>
                        <h2 class="text-xl text-left">Información del propietario</h2>
                        <h2 class="text-xl text-right">2 - 4</h2>
                    </div>

                    <!-- Entradas -->
                    <label for="nombre_propietario">Nombre completo:</label>
                    <input type="text" id="nombre_propietario" name="nombre_propietario" required/>

                    <label for="telefono">Número de Celular:</label>
                    <input type="tel" id="telefono" name="telefono" required />

                    <label for="telefono">Número de teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" />

                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required/>
                </div>

                <!-- botones -->
                <input type="button" name="next" class="next" value="Next" />
                <input type="button" name="previous" class="previous" value="Previous"/>
            </fieldset>

            <!-- Motivo de la cita -->
            <fieldset>
                <div class="text-center">
                    <!-- Encabezado -->
                    <div>
                        <h2 class="text-xl text-left">Motivo de la cita</h2>
                        <h2 class="text-xl text-right">3 - 4</h2>
                    </div>

                    <!-- Entradas -->
                    <label for="services"></label>
                    <select id="services" name="services">
                        <option value="">Seleccione una opción</option>
                        <option value="consulta">Consulta general</option>
                        <option value="vacunacion">Vacunación</option>
                        <option value="desparasitacion">Desparasitación</option>
                        <option value="cirugia">Cirugía</option>
                        <option value="odontologia">Odontología</option>
                        <option value="peluqueria">Peluquería</option>
                    </select>

                    <label for="transporte">Transporte</label>
                    <select name="transporte" id="transporte">
                        <option value="No_transporte">No lo deseo</option>
                        <option value="id_vuelta">Ida y Vuelta</option>
                        <option value="ida">Solo Ida</option>
                        <option value="vuelta">Solo Vuelta</option>
                    </select>

                    <label for="fecha_cita">¿En qué fecha le gustaría agendar la cita?</label>
                    <input type="date" id="fecha_cita" name="fecha_cita" required>

                    <label for="hora_cita">¿En qué horario le gustaría agendar la cita?</label>
                    <input type="time" name="hora_cita" id="hora_cita">

                    <p>Comentarios adicionales</p>
                    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                </div>

                <!-- botones -->
                <input type="button" name="next" class="next" value="Next" />
                <input type="button" name="previous" class="previous" value="Previous"/>
            </fieldset>

            <!-- Terminar -->
            <fieldset>
                <div class="text-center">

                  <!-- Titulo -->
                  <div>
                    <h2 class="text-xl text-left">Terminado!</h2>
                    <h2 class="text-xl text-right">4/4</h2>
                  </div>

                  <!-- Contenedor -->
                  <div>
                    <h2>ÉXITO !</h2>
                    <!-- Icon -->
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-discount-check-filled"
                        width="80"
                        height="80"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="#2c3e50"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                          d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                        stroke-width="0"
                        fill="#673AB7"/>
                    </svg>

                    <span>
                      Un representante de nuestra clínica se pondrá en contacto con usted para confirmar su cita.
                    </span>

                    <p>
                      Le recordamos que para cancelar o reprogramar una cita, debe hacerlo con al menos 24 horas de anticipación. conctactando a nuestro N° telefono: <span>+507 233-333.</span> 
                    </p>
                  </div>

                </div>
            </fieldset>

        </form>

    </section>

</template>

<style scoped>
/* Quita los bordes */
fieldset {
  border: none;
}

/* Oculta los fields despues de la primera */
fieldset:not(:first-of-type){
  display: none;
}

/* Mueve el icono y crea el circulo */
section form ul li:before{
  width: 50px;
  height: 50px;
  line-height: 45px;
  display: block;
  font-size: 20px;
  color: white;
  background: lightgray;
  border-radius: 50%;
  margin: 0 auto 10px auto;
  padding:2px;
}

/* Crea la linea entre los circulos */
section form ul li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: lightgray;
  position: absolute;
  left: 0;
  top: 25px;
  z-index: -1;
}

section form ul li.active:before,
section form ul li.active:after {
  background: #3E9392;
}

</style>