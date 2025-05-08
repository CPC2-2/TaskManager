<x-guest-layout>
    <h1 class="text-4xl font-bold">Formulario de Tarea</h1>
    <p class="mt-[5px]">Añade tareas al proyecto y mejora tu productividad</p>
    <form method="POST" action="{{ route('tareas.store', $proyecto->id) }}" class="mt-[30px]">
        @csrf

        <!-- Nombre de la tarea -->
        <div class="mt-[10px]">
            <x-input-label for="nom" value="Nombre de la tarea"/>
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" required autofocus autocomplete="nom" />
        </div>

        <!--Description-->
        <div class="mt-[20px]">
            <x-input-label for="descripcio" value="Descripción de la tarea"/>
            <textarea id="descripcio" class="block mt-1 w-full rounded-lg border-gray-300" name="descripcio"></textarea>
        </div>

        <!--Status!-->
        <div class="mt-[20px]">
            <x-input-label for="estat" value="Estado de la Tarea"/>
            <select id="estat" name="estat" class="block mt-1 w-full rounded-lg border-gray-300">
                <option value="pendent">Pendiente</option>
                <option value="finalizada">Finalizada</option>
                <option value="en process">En Proceso</option>
            </select>
        </div>

        <!--Date -->
        <div class="mt-[20px]">
            <x-input-label for="expiracio" value="Fecha de Expiración"/>
            <x-text-input id="expiracio" class="block mt-1 w-full" type="date" name="expiracio" />
        </div>

        <!-- Botón de Enviar -->
        <div class="w-full bg-black mt-[30px] rounded-lg hover:bg-gray-900 transition duration-200 ease-in-out">
            <button type="submit" class="text-white text-center flex justify-center p-[10px]">Añadir Tarea</button>
        </div>

    </form>
</x-guest-layout>
