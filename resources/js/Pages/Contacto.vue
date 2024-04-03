<template>
    <section id="contacto" class="text-gray-600 body-font">
        <div class="container py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <!-- Portada -->
            <div
                class="portada lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg m-4 p-10 flex items-end ">
                <div
                    class="bg-white  flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2
                            class="title-font font-semibold text-gray-900 tracking-widest text-xs"
                        >
                            Dirreción
                        </h2>
                        <p class="mt-1">
                            Panamá, Tumba muerto, Calle ?
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2
                            class="title-font font-semibold text-gray-900 tracking-widest text-xs"
                        >
                            EMAIL
                        </h2>
                        <a class="text-[#3E9392] leading-relaxed"
                            >example@email.com</a
                        >
                        <h2
                            class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
                        >
                            Telefono
                        </h2>
                        <p class="leading-relaxed">123-456-7890</p>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div
                class="lg:w-1/3 md:w-1/2 bg-white flex flex-col mx-4 md:ml-auto w-full md:py-8 lg:px-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">
                    ¿Tienes alguna duda? Escríbenos 
                </h2>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600"
                        >Nombre</label
                    >
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    />
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600"
                        >Email</label
                    >
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    />
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600"
                        >Mensaje</label
                    >
                    <textarea
                        id="message"
                        name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-[#3E9392] focus:ring-1 focus:ring-[#3E9392] h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                    ></textarea>
                </div>
                <button
                    class="text-white bg-[#3E9392] border-0 py-2 px-6 focus:outline-none hover:bg-[#45AB97] rounded text-lg"
                >
                    Enviar
                </button>
            </div>

        </div>
    </section>
</template>

<style scoped>
.portada{
    background-image: url(../../../public/img/local.jpg);
    background-size: cover;
}
</style>