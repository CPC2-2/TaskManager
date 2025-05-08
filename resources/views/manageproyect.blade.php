<x-app-layout>
    <section>
        <div class="p-10 bg-cover bg-center lg:rounded-xl md:rounded-xl sm:rounded-lg">
            <h1 class="text-4xl font-extrabold">{{ $proyecto->nombre }}</h1>
            <div class="flex items-center justify-between">
                <div><p class="p-1">{{ $proyecto->descripcion }}</p></div>
                
                <div class="flex items-center">
                    <p class="bg-green-500 ml-5 px-5 text-white rounded-lg">
                        @if ($proyecto->Abierto === 1)
                            Abierto
                        @else
                            Cerrado
                        @endif
                    </p>
                    <x-dropdownsettingproyects align="right" width="48">
                        <x-slot name="trigger">
                            <div class="border border-black ml-5 rounded-md cursor-pointer hover:bg-gray-300 trasition duration-200 ease-in-out hover:border-gray-300">
                                <img class="w-[25px]" src="{{ asset('storage/more.png') }}" alt="">
                            </div>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-slate-200 p-2 transition duration-200 ease-in-out rounded-lg flex">
                                <div class="flex items-center">
                                    <img class="w-[17px] mr-2" src="{{ asset('storage/capas.png') }}" alt="">
                                    <p>{{ __('Hacer Copia') }}</p>
                                </div>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-slate-200 p-2 transition duration-200 ease-in-out rounded-lg">
                                <div class="flex items-center">
                                    <img class="w-[17px] mr-2" src="{{ asset('storage/ajustes.png') }}" alt="">
                                    <p>{{ __('Ajustes') }}</p>
                                </div>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdownsettingproyects>
                </div>
            </div>
            <div class="py-3 mt-10 flex items-center border-b-[2px] border-black">
                <ul class="flex items-center">
                    <li class="border-r-[2px] border-black px-[15px] py-[5px] bg-slate-200">Tareas</li>
                    <li class="border-r-[2px] border-black px-[10px] py-[5px] hover:bg-slate-200 cursor-pointer transition duration-200">Historial de Tareas</li>
                    <li class="border-r-[2px] border-black px-[10px] py-[5px] hover:bg-slate-200 cursor-pointer transition duration-200">Resumen de Tareas</li>
                </ul>
            </div>
            <div class="mt-10">
                <h2 class="text-2xl font-extrabold">Tareas Disponibles</h2>
            </div>
            <div class="bg-black p-[10px] px-[20px] w-fit rounded-lg hover:bg-gray-800 transition duration-200 ease-in-out cursor-pointer mt-6">
                <a href="{{ route('createtask', $proyecto->id) }}" class="text-white">Crear Tarea</a>
            </div>
        </div>
    </section>
    <div class="p-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($tasques as $tasque)
            <div class="p-5 rounded-lg shadow border border-gray-300 bg-white">
                <h3 class="text-lg font-semibold mb-2 text-black">{{ $tasque->nom }}</h3>
                <p class="text-sm text-gray-700 mb-2">
                    {{ $tasque->descripcio ?? 'Sin descripción' }}
                </p>
                <div class="text-xs text-gray-500">
                    Estado: <strong>{{ ucfirst($tasque->estat) }}</strong><br>
                        Expira: {{ \Carbon\Carbon::parse($tasque->data_expiracio)->format('d/m/Y') }}
                </div>
            </div>
            @empty
            <p class="col-span-3 text-gray-600">No hay tareas disponibles para este proyecto.</p>
        @endforelse
    </div>
</x-app-layout>
