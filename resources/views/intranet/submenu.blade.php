<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Menu : '.$menu->nom_menu }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="w-1/3 bg-white px-6 py-4  overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="{{ route('submenus.store') }}" method="POST">
                        @csrf
                        <h2 class="mt-5 font-semibold text-xl text-gray-800 leading-tight">REGISTRAR</h2>
                        <input type="hidden" name="idmenus" value="{{$menu->id}}">
                        <x-input-label for="nom_submenu" :value="__('Nombre')" />
                        <x-text-input id="nom_submenu" class="block mt-1 w-full" type="text" name="nom_submenu" :value="old('nom_submenu')" required autofocus />
                        <x-input-error :messages="$errors->get('nom_submenu')" class="mt-2" />
                        <br>
                        <x-input-label for="link_menu" :value="__('Link')" />
                        <x-text-input id="link_submenu" class="block mt-1 w-full" type="text" name="link_submenu" :value="old('link_submenu')" required autofocus />
                        <x-input-error :messages="$errors->get('link_submenu')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Guardar') }}</x-primary-button>
                    </form>
                </div>
            </div>
            <div class="w-1/3 bg-white overflow-hidden shadow-sm sm:rounded-lg"></div>
            <div class="w-1/3 bg-white overflow-hidden shadow-sm sm:rounded-lg"></div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="table-fixed w-full border border-slate-500">
                <thead>
                    <tr>
                        <th class="border border-slate-500">ID</th>
                        <th class="border border-slate-500">Nombre</th>
                        <th class="border border-slate-500">Link</th>
                        <th class="border border-slate-500">Estado</th>
                        <th class="border border-slate-500">Accion</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($submenus as $item)
                  <tr>
                    <td class="border border-slate-500">{{ $item->id }}</td>
                    <td class="border border-slate-500">{{ $item->nom_submenu }}</td>
                    <td class="border border-slate-500">{{ $item->link_submenu }}</td>
                    <td class="border border-slate-500">{{ $item->activo_submenu }}</td>
                    <td class="border border-slate-500">
                        <a href="{{route('menu.edit', $item->id)}}">Seleccionar</a>&nbsp;
                        <form action="{{route('submenu.destroy', $item->id)}}" name="{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>