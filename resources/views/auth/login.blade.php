<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex text-center flex-col justify-center">
        <h1 class="text-4xl font-extrabold text-gray-800">¡Bienvenido de nuevo!</h1>
        <p class = "mt-5 mb-5">Inicia sesión para continuar gestionando tus tareas y proyectos</p>
    </div>  

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recuerdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Has Olvidado la contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Inciar Sessión') }}
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
