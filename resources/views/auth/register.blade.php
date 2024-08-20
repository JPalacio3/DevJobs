<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <!-- Errors -->
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full lowercase" type="email" name="email" :value="old('email')" required autocomplete="username" />
        </div>

        <!-- User Rol -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('Tipo de Cuenta')" />

            <select name="rol" id="rol" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" :value="old('rol')">
                <option class="text-gray-400" disabled selected>-- Selecciona un Rol --
                </option>
                <option value="1">Developer - Obtener Empleo</option>
                <option value="2">Reclutador - Publicar Empleos</option>
            </select>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Repetir Contraseña')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

        </div>

        <div class="flex justify-between align-center my-5">
            <x-link :href="route('login')">
                Iniciar Sesión
            </x-link>

            <x-link :href="route('password.request')">
                Olvidaste tu Contraseña
            </x-link>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Crear Cuenta') }}
        </x-primary-button>
        </div>
    </form>
</x-guest-layout>
