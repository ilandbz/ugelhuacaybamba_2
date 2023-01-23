@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<main id="main">
<section id="about" class="about" style="margin-top: 90px">
  <div class="container">
    <h2>CONVOCATORIAS VIGENTES</h2><br>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>TIPO</th>
            <th>TITULO</th>
            <th>DESCRIPCION</th>
            <th>FECHA INICIO</th>
            <th>FECHA TERMINO</th>
            <th>ACCION</th>
        </tr>
        @foreach ($convocatorias as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tipo}}</td>
                <td>{{$row->titulo}}</td>
                <td>{{$row->descripcion}}</td>
                <td>{{$row->fecha_inicio}}</td>
                <td>{{$row->fecha_termino}}</td>
                <td><a href="{{route('verconvocatoria', $row->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
    {{$convocatorias->links()}}
  </div>
</section><!-- End About Section -->
</main>
@endsection