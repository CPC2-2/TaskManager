<x-app-layout>

    <section class="max-w-7xl mx-auto sm:mx-11 mt-10">

        <div class="p-7 bg-cover bg-center lg:rounded-xl md:rounded-xl sm:rounded-lg" style="background-image: url('{{ asset('storage/projects.png') }}');">
            <h1 class="text-4xl text-white font-extrabold">Bienvenido a tus proyectos</h1>
            <p class="max-w-xl mt-6 text-white text-[17px]">
                Construidas como una hoja de cálculo, las tablas de proyectos te ofrecen un lienzo en vivo para filtrar, ordenar y agrupar problemas y solicitudes de extracción. Adáptalas a tus necesidades con campos personalizados y vistas guardadas.
            </p>
            <div class="mt-8 mb-5">
                <a href="{{ route('createproyect') }}" class="p-3 rounded-lg bg-black text-white hover:bg-slate-900 transition duration-400 ease-in-out">Crear Proyecto</a>
            </div>
        </div>

        <div class="mt-10 bg-cover bg-center lg:rounded-xl md:rounded-xl sm:rounded-lg border bg-slate-900">
            <!--show active projects!-->
            <div class="flex justify-between items-cente p-5 text-white">
                <div class="flex gap-9">
                <!--SHOW OPEN PROYECTS!-->
                    <div class="flex">
                        <p class="mr-2">{{count($proyectos)}}</p>
                        <p>Open</p>
                    </div>
                <!--SHOW CLOSED PROYECTS!-->
                    <div class="flex">
                        <p class="mr-2">0</p>
                        <p>Close</p>
                    </div>
                </div>
                <div class="flex items-center cursor-pointer">
                    Ordenar
                    <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="mt-[20px]">
            @foreach ($proyectos as $proyecto)
                <div class="p-4 bg-white shadow mb-4 rounded">
                    <a href="{{ route('manageproyect',['id' => $proyecto->id]) }}" class="text-xl font-bold hover:underline">{{ $proyecto->nombre }}</a>
                    <p>{{ $proyecto->descripcion}}</p>
                    <p class="text-sm text-gray-500">Inicio: {{ $proyecto->fecha_inicio }} | Fin: {{ $proyecto->fecha_fin }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
