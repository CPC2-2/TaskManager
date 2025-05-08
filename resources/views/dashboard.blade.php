<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!--Main content section!-->
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-20">
        <h1 class="text-4xl">¡Bienvenido {{ Auth::user()->name }}!</h1>
        <p class="text-md mt-4">Bienvenido a tu dashboard. Aquí podrás gestionar todos tus proyectos de manera eficiente y organizada. Visualiza el progreso de tus tareas, colabora con tu equipo y mantén un control total sobre cada detalle.</p>

        <!--show Last Proyects!-->
        <div class="mt-32">
            <h3 class="text-2xl">Utlimos Proyectos</h3>
            <p class="text-md">Aquí podras observar tus ultimos proyectos</p>
            <div></div>
        </div>
    </section>
</x-app-layout>
