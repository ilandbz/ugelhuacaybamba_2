<x-app-layout>

    <x-slot name="header">
        <h2><i class="far fa-clone"></i> CONVOCATORIAS
    </x-slot>
    <h6 class="br-section-label">Registro</h6>
    <form action="{{ route('convocatoria.store') }}" method="POST">
        @csrf
        <div class="row mg-b-25">
            <div class="col-4">
                <div class="form-group">
                    <label class="form-control-label" for="titulo">Titulo: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="titulo" required>
                    <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                </div>
            </div><!-- col-4 -->
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="fecha_inicio">Fecha Inicio: <span class="tx-danger">*</span></label>
                    <input type="date" name="fecha_inicio" value="{{date('Y-m-d')}}" class="form-control">                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="fecha_inicio">Fecha Termino: <span class="tx-danger">*</span></label>
                    <input type="date" name="fecha_termino" value="{{date('Y-m-d')}}" class="form-control">                
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="fecha_fin_inscripcion">Fecha fin de Inscripcion : <span class="tx-danger">*</span></label>
                    <input type="date" name="fecha_fin_inscripcion" id="fecha_fin_inscripcion" value="{{date('Y-m-d')}}" class="form-control">                
                </div>
            </div>            
        </div><!-- row -->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="descripcion">Descripcion: <span class="tx-danger">*</span></label>
                    <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                </div>                
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-control-label" for="fecha_resultados">Fecha Resultados : <span class="tx-danger">*</span></label>
                    <input type="date" name="fecha_resultados" id="fecha_resultados" value="{{date('Y-m-d')}}" class="form-control">                
                </div>
            </div>   

        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-info">Guardar</button>
            </div>
        </div>
  
    </form>
</x-app-layout>
