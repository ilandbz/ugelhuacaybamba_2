<x-app-layout>

    <x-slot name="header">
        <h2><i class="far fa-clone"></i> ARCHIVOS
    </x-slot>
    <h6 class="br-section-label">Registro</h6>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="row mg-b-25">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label" for="nom_archivo">Nombre: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="nom_archivo" id="nom_archivo" :value="old('nom_archivo')" placeholder="Nombre">
                    <x-input-error :messages="$errors->get('nom_archivo')" class="mt-2" />
                </div>
            </div><!-- col-4 -->
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="nom_archivo">Archivo: <span class="tx-danger">*</span></label>
                    <div class="custom-file">
                        <input type="file" id="file" class="custom-file-input">
                        <label class="custom-file-label"></label>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label" for="categoriamenu">Categoria: <span class="tx-danger">*</span></label>
                <select name="" id="" class="form-control">
                    <option value="Comunicado">Comunicado</option>
                    <option value="Solicitud">Solicitud</option>
                    <option value="Oficio">Oficio</option>
                    <option value="Resolucion">Resolucion</option>
                </select>
                </div>
            </div><!-- col-4 -->
        </div><!-- row -->
        <div class="row">
            <div class="col-md-12 d-none" id="contenidopagina">
                <label class="form-control-label">Nombre Pagina: </label>
                <input class="form-control" type="text" name="nom_pagina" id="nom_pagina" :value="old('nom_pagina')" placeholder="">
                <label class="form-control-label">Contenido: </label>
                <textarea rows="8" class="form-control is-valid mg-t-20" name="cont_pagina" id="mysummernote" placeholder="Textarea (success state)"></textarea>
            </div>
            <div class="col-md-4 d-none">
                <div class="form-group">
                    <label class="form-control-label" for="link_menu">Link: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="link_menu" id="link_menu" value="#" placeholder="Link Menu">
                    <x-input-error :messages="$errors->get('link_menu')" class="mt-2" />
                </div>                    
            </div>
        </div><br>
        <div class="row">
            <div class="col">
                <button class="btn btn-info">Guardar</button>
            </div>
        </div>
  
    </form>

</x-app-layout>
