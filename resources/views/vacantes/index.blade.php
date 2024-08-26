<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session()->has('mensaje'))
            <div class="
                border border-green-500 bg-green-100 text-green-800 font-bold uppercase text-sm text-center p-2 mt-2 rounded">
                {{session('mensaje')}}
            </div>
            @endif

            <livewire:mostrar-vacantes />
        </div>
    </div>
</x-app-layout>
