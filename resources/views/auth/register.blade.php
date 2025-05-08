<x-guest-layout>

    <div class="flex text-center flex-col justify-center">
        <h1 class="text-4xl font-extrabold text-gray-800">¡Optimiza tu productividad!</h1>
        <p class = "mt-5 mb-5">Regístrate ahora y empieza a gestionar tus tareas y proyectos</p>
    </div>    

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Ya tienes Cuenta?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<div class="flex justify-center">
    <div class="flex items-center">
        <a href="#" class="p-5 opacity-70 hover:opacity-100 transition duration-200">Todos los derechos reservados 2024/2025</a>
        <a href="#" class="p-5 opacity-70 hover:opacity-100 transition duration-200">Terminos de privacidad</a>
        <a href="#" class="p-5 opacity-70 hover:opacity-100 transition duration-200">Politica de Cookies</a>
        <a href="#" class="p-5 opacity-70 hover:opacity-100 transition duration-200">Seguridad</a>
        <a href="#" class="p-5 opacity-70 hover:opacity-100 transition duration-200">Contact</a>
    </div>
</div>
