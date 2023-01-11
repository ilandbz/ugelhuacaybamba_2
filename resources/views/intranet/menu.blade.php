<style>
    .invisible{
        visibility: hidden;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menus') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-1 lg:px-8">
            <div class="flex">
                <div class="w-1/3 bg-white px-6 py-1  overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <h2 class="mt-5 font-semibold text-xl text-gray-800 leading-tight">REGISTRAR</h2>
                        <x-input-label for="nom_menu" :value="__('Nombre')" />
                        <x-text-input id="nom_menu" class="block mt-1 w-full" type="text" name="nom_menu" :value="old('nom_menu')" required autofocus />
                        <x-input-error :messages="$errors->get('nom_menu')" class="mt-2" />
                        <x-input-label for="link_menu" :value="__('Link')" />
                        <x-text-input id="link_menu" class="block mt-1 w-full" type="text" name="link_menu" :value="old('link_menu')" required autofocus />
                        <x-input-error :messages="$errors->get('link_menu')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Guardar') }}</x-primary-button>
                    </form>
                </div>
                <div class="w-1/3 bg-white overflow-hidden shadow-sm sm:rounded-lg"></div>
                <div class="w-1/3 bg-white px-6 py-1 overflow-hidden shadow-sm sm:rounded-lg">
                    <form class="{{isset($menu) ? '' : 'invisible'}}" action="{{ route('menus.update', !isset($menu) ? 123 : $menu) }}" method="POST">
                        @csrf
                        @method('put')
                        <h2 class="mt-5 font-semibold text-xl text-gray-800 leading-tight">ACTUALIZAR</h2>
                        <x-input-label for="nom_menu" :value="__('Nombre')" />
                        <x-text-input id="nom_menu" class="block mt-1 w-full" type="text" name="nom_menu" :value="isset($menu) ? $menu->nom_menu : ''" required autofocus />
                        <x-input-error :messages="$errors->get('nom_menu')" class="mt-2" />
                        <x-input-label for="link_menu" :value="__('Link')" />
                        <x-text-input id="link_menu" class="block mt-1 w-full" type="text" name="link_menu" :value="isset($menu) ? $menu->link_menu : ''" required autofocus />
                        <x-input-error :messages="$errors->get('link_menu')" class="mt-2" />
                            <div class="form-check">
                                <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" type="radio" name="activo_menu" id="activo_menu" {{ (!isset($menu) || $menu->activo_menu==1) ? 'checked' : '' }} value="1">
                                <label class="form-check-label inline-block" for="activo_menu">
                                ACTIVO
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" type="radio" name="activo_menu" id="flexRadioCheckedDisabled" {{ (isset($menu) && $menu->activo_menu==0) ? 'checked' : '' }} value = "0">
                                <label class="form-check-label inline-block" for="flexRadioCheckedDisabled">
                                INACTIVO
                                </label>
                            </div>
                            <a href="{{route('menu.submenus', isset($menu) ? $menu->id : '')}}">Ver Submenus</a><br>
                        <x-primary-button class="mt-1">{{ __('Guardar') }}</x-primary-button>
                    </form>                
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mt-5 font-semibold text-xl text-gray-800 leading-tight">LISTA DE MENUS</h2>
                    <div class="p-8">
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
                            @foreach ($menus as $item)
                            <tr>
                                <td class="border border-slate-500">{{ $item->id }}</td>
                                <td class="border border-slate-500">{{ $item->nom_menu }}</td>
                                <td class="border border-slate-500">{{ $item->link_menu }}</td>
                                <td class="border border-slate-500">{{ $item->activo_menu }}</td>
                                <?php if($item->link_menu != '#'){    ?>
                                    <form action="{{ route('menus.destroy', $item->id) }}" class="m-0 p-0" name="{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Eliminar</button>
                                    </form>

                                <?php } ?>
                                <td class="border border-slate-500"><a href="{{route('menu.edit', $item->id)}}">Seleccionar</a>&nbsp;


                                <a href="{{route('menus.paginaweb')}}" class="mt-0">Pagina Web</a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    {{ $menus->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>