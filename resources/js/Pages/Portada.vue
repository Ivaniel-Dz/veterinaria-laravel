<template>
    <section
        id="inicio"
        class="bg-gradient-to-b from-teal-500 to-green-40 dark:text-white w-full h-auto flex gap-8 flex-wrap-reverse p-4 justify-center"
    >
        <article class="md:flex-grow-0 md:basis-[300px] lg:basis-[500px] xl:basis-[800px] lg:py-6">
            <h2 class="text-3xl md:text-4xl font-semibold lg:pt-20 md:pt-16">
                Bienvenido a <br />
                Veterinaria Happy Pets
            </h2>
            <p class="text-base md:text-[18px] py-4 xl:mr-44">
                Ofrecemos atención de primera calidad con un enfoque en el
                bienestar integral de tus mascotas. Nuestro equipo profesional
                brinda cuidado experto y compasivo, desde consultas médicas
                hasta cirugías, garantizando la salud y felicidad de tus seres
                queridos peludos.
            </p>
            <button
                class="w-180px h-50px text-[0.97em] text-center bg-[#3E9392] text-white py-3 px-5 rounded-full hover:shadow-none transition-all ease-in duration-500"
            >
                Reservar Cita
            </button>
        </article>

        <figure class="md:flex-grow-0 md:basis-[300px] lg:basis-[400px] md:py-6 lg:flex lg:items-center lg:justify-center">
            <img
                class="w-[340px] h-[450px]"
                src="https://images.pexels.com/photos/7469226/pexels-photo-7469226.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt=""
            />
        </figure>
    </section>
</template>

<style scoped>
img {
    /* border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; */
    border-radius: 30% 70% 32% 68% / 66% 30% 70% 34%;
}

button {
    box-shadow: 5px 5px 20px 5px rgba(0, 0, 0, 0.3);
}
</style>