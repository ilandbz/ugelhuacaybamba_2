<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pagina Web') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-1 lg:px-8">
            <div class="flex">
                <div class="w-1/2 bg-white px-6 py-1  overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="{{ route('pagina.paginawebstore') }}" method="POST">
                        @csrf
                        <h2 class="mt-5 font-semibold text-xl text-gray-800 leading-tight">REGISTRAR</h2>
                        <x-input-label for="nom_pagina" :value="__('Nombre Pagina')" />
                        <x-text-input id="nom_pagina" class="block mt-1 w-full" type="text" name="nom_pagina" :value="old('nom_pagina')" required autofocus />
                        <x-input-error :messages="$errors->get('nom_menu')" class="mt-2" />
                        <x-input-label for="contenido" :value="__('Contenido')" />
                        <textarea name="cont_pagina" id="cont_pagina" class="block mt-1 w-full" cols="30" rows="10">{{old('cont_pagina')}}</textarea>
                        <x-input-error :messages="$errors->get('cont_pagina')" class="mt-2" required autofocus />
                        <x-primary-button class="mt-4">{{ __('Guardar') }}</x-primary-button>
                    </form>
                </div>
                <div class="w-1/2 bg-white px-6 py-1 overflow-hidden shadow-sm sm:rounded-lg"></div>
            </div>
        </div>
    </div>
</x-app-layout>