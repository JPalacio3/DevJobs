<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificiaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center mb-10">Mis Notificaciones</h1>

                    <div class="divide-y divide-gray-200">

                        @forelse($notificaciones as $notificacion)
                        <div class="p-5  rounded-lg my-3 lg:flex lg:justify-between lg:items-center">
                            <div class="">
                                <p>Tienes un Nuevo Candidato en:
                                    <span class="text-indigo-700 font-bold"> {{$notificacion->data['nombre_vacante']}}</span>
                                </p>
                                <p>
                                    <span class="font-bold text-sm"> {{$notificacion->created_at->diffForHumans()}}</span>
                                </p>
                            </div>
                            <div class="mt-5 lg:mt-0 text-center">
                                <a href="{{route('candidatos.index', $notificacion->data['id_vacante'])}}" class="bg-indigo-500 rounded-xl p-3 text-white text-sm uppercase font-bold">Ver Candidatos</a>
                            </div>
                        </div>
                        @empty
                        <p class=" text-center text-gra-600">No Hay Notificaciones Nuevas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
