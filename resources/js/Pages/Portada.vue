<template>
    <section
        id="inicio"
        class="bg-gradient-to-b from-teal-500 to-green-40 dark:text-white w-screen h-auto grid grid-cols-2 gap-8 py-12 px-[250px]"
    >
        <article>
            <h2 class="text-4xl font-semibold pt-20 pb-5">
                Bienvenido a <br />
                Veterinaria Happy Pets
            </h2>
            <p class="text-[18px] pb-5">
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

        <figure>
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
