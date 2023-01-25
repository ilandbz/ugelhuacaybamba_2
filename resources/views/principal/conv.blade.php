@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<main id="main">
<section id="about" class="about" style="margin-top: 90px">
  <div class="container">
    <h2>CONVOCATORIAS VIGENTESasdasd</h2><br>

        @foreach ($convocatorias as $row)
        {{-- @php

          $archivos=\App\Models\ArchivoConvocatoria::where('id_convocatoria', $row->id)->get();
        @endphp --}}
        <div class="card">
          <div class="card-header bg-danger text-light">
            <h4><i class="far fa-calendar-alt"></i>&nbsp;|&nbsp;{{$row->fecha_inicio}}&nbsp;|&nbsp;{{$row->tipo.' : '.$row->titulo}}</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$row->titulo}}</h5>
            <p class="card-text">{{$row->descripcion}}adsadasadsasadasdadsddddddddddddddddddddddddddddd</p>
            <ul>
              @foreach ($row->archivos as $archivo)
                  <li>{{$archivo['nom_archivo']}}</li>
              @endforeach
            </ul>
            <a href="#" class="btn btn-primary"></a>
          </div>
          <div class="card-footer">
            {{$row->fecha_inicio}} al {{$row->fecha_termino}}
          </div>
        </div><br>
        @endforeach
    </table>
    {{-- {{$convocatorias->links()}} --}}

<br>
<br>
<br>



  </div>
</section><!-- End About Section -->
</main>
@endsection