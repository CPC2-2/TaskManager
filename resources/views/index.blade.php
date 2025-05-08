<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-white dark:bg-gray-900 max-w-[1300px] m-auto">

        <!-- Header Component -->
        <x-header></x-header>

        <!-- Section de Introducción -->
        <section class="mb-12 pt-32 flex items-center justify-center flex-col lg:flex-row">
            <div class="text-center lg:text-left lg:max-w-[50%] px-4">
                <h1 class="text-4xl font-extrabold text-gray-800">
                    ¡Bienvenido a la aplicación de Gestión de Tareas!
                </h1>
                <p class="text-lg mt-6 text-gray-600 dark:text-gray-400">
                    Organiza tus actividades de manera eficiente y lleva un seguimiento de todo lo que necesitas hacer. Regístrate y empieza ahora.
                </p>
                <div class="mt-10">
                    <a class="text-black border border-black text-lg p-3 px-6 rounded-3xl hover:bg-black hover:text-white transition duration-300 ease-in-out" href="/login">Empieza Ahora</a>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 lg:max-w-[50%]">
                <img class="w-[1500px] h-[400px] object-cover object-top" src="{{ asset('storage/carbon.png') }}" alt="Gestión de tareas">
            </div>
        </section>

        <!-- Main Section: Explora y Crea -->
        <section class="h-[600px] mt-48 ">
            <div class="flex justify-center text-center">
                <div class="flex flex-col">
                    <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white">
                        No bajes el ritmo y continúa creando
                    </h1>
                    <p class=" flex text-lg  m-10 text-gray-600 dark:text-gray-400">
                    Crea y gestiona tus proyectos de manera sencilla y eficiente. Nuestra plataforma te ofrece las herramientas necesarias para organizar tus tareas, asignar responsabilidades y hacer un seguimiento continuo de tu progreso.
                    Cada paso cuenta y aquí tendrás todo lo necesario para alcanzar tus objetivos de forma eficiente y sin perder el impulso.    
                </p>
                    <div class="flex justify-center">
                        <img class="w-[160px]" src="{{ asset('storage/animation.gif') }}" alt="Animación de gestión">
                    </div>
                </div>
            </div>
        </section>

        <!--Adentadges section!-->

        <section class="">
            <div class="flex text-center flex-col">
                <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white">Ventajas que transforman tu manera de trabajar</h1>
                <p class="pt-5">Nuestra plataforma de gestión de proyectos está diseñada para ayudarte a maximizar la productividad y la eficiencia de tu equipo. Con herramientas intuitivas y fáciles de usar, podrás organizar tareas, establecer prioridades, asignar responsabilidades y hacer un seguimiento detallado del progreso.</p>
            </div>
            <div class="border border-black rounded-lg mt-20 m-10 flex-nowrap lg:flex ">
                <div class="p-10 lg:border-r lg:border-black">
                    <h3 class="text-xl font-extrabold">Organización simplificada</h3>
                    <p class="pt-2 pb-6">Mantén todas tus tareas y proyectos organizados en un solo lugar, evitando la confusión y el desorden.</p>
                    <a href="#" class="border border-black p-2 rounded-3xl hover:bg-black hover:text-white transition duration-200 ease-in-out">Explorar Mas</a>
                    <img class=" pt-5 object-cover h-[350px] w-[1300px]" src="https://github.githubassets.com/assets/hero-961322485af6.webp" alt="">
                </div>
                <div class="p-10 lg:border-r lg:border-black">
                    <h3 class="text-xl font-extrabold ">Colaboración en tiempo real</h3>
                    <p class="pt-2 pb-6">Facilita la comunicación y el trabajo en equipo con herramientas de colaboración instantánea, donde todos pueden estar al tanto del progreso.</p>
                    <a href="#" class="border border-black p-2 rounded-3xl hover:bg-black hover:text-white transition duration-200 ease-in-out">Explorar Mas</a>
                    <img class="pt-5" src="https://github.githubassets.com/assets/pillar-2-ff69e872920a.webp" alt="">
                </div>
                <div class="p-10 lg:border-r">
                    <h3 class="text-xl font-extrabold" >Asignación clara de responsabilidades</h3>
                    <p class="pt-2 pb-6" >Asigna tareas de manera precisa y asegúrate de que cada miembro del equipo sepa exactamente qué se espera de él.</p>
                    <a href="#"  class="border border-black p-2 rounded-3xl hover:bg-black hover:text-white transition duration-200 ease-in-out">Explorar Mas </a>
                    <img class="pt-5" src="https://github.githubassets.com/assets/pillar-3-0a063e2daae2.webp" alt="">
                </div>
            </div>
        </section>

        <!-- Last Section !-->

    </body>
</html>
