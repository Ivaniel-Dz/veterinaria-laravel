<template>
  <section class="dark:bg-color-home-dark bg-color-home">
    <div class=" px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-40">
      <div class="grid gap-10 lg:grid-cols-2">
        <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
          <div class="max-w-xl mb-6">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight c sm:text-4xl sm:leading-none text-color-text-dark ">
              Bienvenido a<br class="hidden md:block" />
              Veterinaria 
              <span class="inline-block text-deep-purple-accent-400">Happy Pets</span>
            </h2>
            <p class="text-base text-color-text-dark md:text-lg">
                  Ofrecemos atención de primera calidad con un enfoque en el
                  bienestar integral de tus mascotas. Nuestro equipo profesional
                  brinda cuidado experto y compasivo, desde consultas médicas
                  hasta cirugías, garantizando la salud y felicidad de tus seres
                  queridos peludos.
            </p>
          </div>
          <div>
            <a href="#cita" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-color-text-dark slide-top">
              Reservar Cita
              <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex items-center justify-center -mx-4 lg:pl-8">
          <div class="flex flex-col items-end px-3">
            <img
              class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56 card-img"
              src="https://images.pexels.com/photos/7469226/pexels-photo-7469226.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt="img-mediano"
            />
            <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40 card-img" src="https://images.pexels.com/photos/6235666/pexels-photo-6235666.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img-mini" />
          </div>
          <div class="px-3">
            <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80 card-img-l" 
            src="https://images.pexels.com/photos/6235108/pexels-photo-6235108.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="img-grande" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style>

/* Imaganes */
.card-img {
  box-shadow:rgb(234, 233, 229) 6px 5px 0px, rgb(234, 233, 229) -5px -6px 0px;
}

.card-img-l {
  box-shadow:rgb(234, 233, 229) 7px -6px 0px, rgb(234, 233, 229) -6px 7px 0px;
}

/* Estilo inicial del botón */
.slide-top {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  -webkit-transition: transform 0.5s linear;
  transition: transform 0.5s linear;
}

/* Al pasar el cursor, el botón se desliza hacia arriba */
.slide-top:hover {
  -webkit-transform: translateY(-5px);
  transform: translateY(-5px);
}


</style>