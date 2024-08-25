<form class="md:w-1/2 space-y-4" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo de la Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Titulo vacante" />

        @error('titulo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select wire:model="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="" class=" text-gray-400" selected> >-- Seleccione Salario --< </option>
                    @foreach ($salarios as $salario )
            <option value="{{$salario->id}}"> {{$salario->salario}}</option>
            @endforeach
        </select>

        @error('salario')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="" class=" text-gray-400" selected> >-- Seleccione Categoría --< </option>
                    @foreach ($categorias as $categoria )
            <option value=" {{$categoria->id}}"> {{$categoria->categoria}}</option>
            @endforeach
        </select>

        @error('categoria')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Nombre de la Empresa" />

        @error('empresa')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')" />

        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" placeholder="Descripción general del puerto" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-60"></textarea>

        @error('descripcion')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imágen')" />
        <x-text-input id="imagen" class=" my-10 block mt-1 w-full" type="file" wire:model="imagen" />

        @error('imagen')
        <livewire:mostrar-alerta :message="$message" />
        @enderror

    </div>

    <x-primary-button class="justify-center md:w-auto w-full ">
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>
