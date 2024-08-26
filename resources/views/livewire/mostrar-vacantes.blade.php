<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach($vacantes as $vacante)
    <div class="
    p-6
    text-gray-400
    bg-white
    border-b
    md:flex md:justify-between md:items-center
    ">

        <div class="space-y-3">
            <a href="#" class="text-xl font-bold">
                {{$vacante->titulo}}
            </a>
            <p class="text-sm text-gray-600 font-bold">
                {{$vacante->empresa}}
            </p>
            <p class="text-sm text-gray-500 font-bold">
                Creado: {{$vacante->created_at->translatedFormat('D d/M/Y') }}
            </p>
            <p class="text-sm text-gray-500 font-bold">
                Actualizado: {{$vacante->updated_at->translatedFormat('D d/M/Y') }}
            </p>
            <p class="text-sm text-gray-500 font-bold">
                Último día para postularse: {{$vacante->ultimo_dia->translatedFormat('D d/M/Y') }}
            </p>
            {{-- <img class="rounded" src="{{ asset('storage/app/public/vacantes/' . $vacante->imagen) }}" alt="Imagen de oferta de empleo"> --}}

        </div>

        <div class="flex flex-col md:flex-row  items-stretch gap-3  mt-5 md:mt-0">
            <a href="#" class="
            bg-slate-800 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center">Candidatos</a>

            <a href="#" class="
            bg-blue-800 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center">Editar</a>

            <a href="#" class="
            bg-red-600 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center">Eliminar</a>
        </div>
    </div>
    @endforeach
</div>
