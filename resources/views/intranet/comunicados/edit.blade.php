<x-app-layout>
    <x-slot name="header">
        <h2><i class="far fa-clone"></i> COMUNICADOS
    </x-slot>
    <h6 class="br-section-label">Registro Galerias</h6>
    <form action="{{ route('comunicado.update', $comunicado) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mg-b-25">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label" for="titulo">Titulo: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="titulo" id="titulo" value="{{$comunicado->titulo}}" placeholder="Titulo">
                    <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-control-label" for="inputGroupFile2">IMAGEN: </label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile2" name="imagen" accept="image/*"">
                            <label class="custom-file-label" for="inputGroupFile2" aria-describedby="inputGroupFileAddon">Choose image</label>
                        </div>
                    </div>
                    <div class="border rounded-lg text-center p-3">
                        <img src="{{asset('img/comunicados/'.$comunicado->imagen)}}" class="img-fluid" id="preview2" />
                    </div>
                </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
               
            </div><!-- col-4 -->
        </div><!-- row -->
        <div class="row">
            <div class="col">
                <button class="btn btn-info">Guardar</button>
            </div>
        </div>
  
    </form>
    <br>

</x-app-layout>
