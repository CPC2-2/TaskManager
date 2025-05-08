<x-app-layout>
    <section class="max-w-3xl mx-auto mt-12 px-6">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">Crear Proyecto</h1>

        <form action="{{ route('projectes.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div class="mb-6">
                <label for="nombre" class="block text-gray-700 text-md mb-2">Nombre del Proyecto</label>
                <input type="text" name="nombre" id="nombre" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight required">
            </div>
            
            <!-- Init date -->
            <div class="mb-6">
                <label for="initdate" class="block text-gray-700 text-md mb-2">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio" id="initdate" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight required">
            </div>
            
            <!-- Descripción -->
            <div class="mb-6">
                <label for="descripcion" class="block text-gray-700 text-md mb-2">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="4" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight required:"></textarea>
            </div>


            <!-- Botón -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-black hover:bg-gray-900 text-white py-2 px-4 rounded trasition duration-200 ease-in-out">
                    Crear Proyecto
                </button>
            </div>
        </form>
    </section>
</x-app-layout>
