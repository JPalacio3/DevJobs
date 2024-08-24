<form action="" class="md:w-1/2 space-y-4">
    <div>
        <x-input-label for="titulo" :value="__('Titulo de la Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" placeholder="Titulo vacante" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select name="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="" class=" text-gray-400" selected disabled> >-- Seleccione Salario --< </option>
                    @foreach ($salarios as $salario )
            <option value="{{$salario->id}}"> {{$salario->salario}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select name="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="" class=" text-gray-400" selected disabled> >-- Seleccione Categoría --< </option>
                    @foreach ($categorias as $categoria )
            <option value=" {{$categoria->id}}"> {{$categoria->categoria}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Nombre de la Empresa" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea name="descripcion" id="descripcion" placeholder="Descripción general del puerto" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-60"></textarea>
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imágen')" />
        <x-text-input id="imagen" class=" my-10 block mt-1 w-full" type="file" name="imagen" />
    </div>

    <x-primary-button class="justify-center md:w-auto w-full ">
        {{ __('Crear Vacante') }}
    </x-primary-button>


</form>
