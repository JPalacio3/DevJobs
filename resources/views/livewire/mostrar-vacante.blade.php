<div class="p-10">
    <div class="mb-5">
        <h3 class="font bold text-3xl text-gray-800 my3">
            {{$vacante->titulo}}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-5 my-5 shadow-sm ">
            <p class="font-bold text-sm text-gray-800 my-3 ">
                Empresa:
                <span class="text-indigo-600 uppercase">{{$vacante->empresa}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 ">
                Último día disponible para postularte:
                <span class="text-indigo-600 uppercase">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 ">
                Categoría:
                <span class="text-indigo-600 uppercase">{{$vacante->categoria->categoria}}</span>
            </p>

            <p class="font-bold text-sm text-gray-800 my-3 ">
                Salario:
                <span class="text-indigo-600 uppercase">{{$vacante->salario->salario}}</span>
            </p>
        </div>
    </div>

    {{-- imagen y descripción del puesto --}}
    <div class="md:grid md:grid-cols-6 md:gap-5">
        <div class="md:col-span-3">
            <img class="rounded shadow md:inline block mx-auto " src="{{asset('storage/vacantes/'.$vacante->imagen)}}" alt="{{'Imagen de vacante '.$vacante->titulo}}">
        </div>

        <div class="md:col-span-3 text-justify">
            <h2 class="mt-5 font-bold text-xl text-indigo-600 mb-5 ">
                Descripción del puesto:
            </h2>
            <p class="text-gray-800 font-bold">{{$vacante->descripcion}}</p>
        </div>
    </div>

    @guest
    <div class="mt-5 bg-gray-50 p-5 text-center border-dashed">
        <p>¿ Deseas postularte a esta vacante ?
            <a class="font-bold text-indigo-600" href="{{route('register')}}"> Obtén una cuenta y aplica a esta y otras vacantes</a>
        </p>
    </div>
    @endguest

    @auth
    {{-- Formulario para enviar curricullum y aplicar a empleo solo para desarrolladores --}}
    @cannot('create', App\Models\Vacante::class)
    <livewire:postular-vacante :vacante="$vacante" />
    @endcannot
    @endauth

</div>
