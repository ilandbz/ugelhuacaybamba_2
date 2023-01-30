@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')

<main id="main" style="margin-top: 90px">


<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('img/bc.jpeg')}}">
	<div class="container">
        <h2>GESTION DE DOCUMENTOS</h2>
        <br>
        <div class="row">
            @foreach ($registros as $item)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" id="heading{{$item->id}}">
                            <a class="btn btn-link btn-block text-left" type="button" data-bs-toggle="collapse" aria-expanded="false" href="#multiCollapseExample{{$item->id}}" aria-controls="multiCollapseExample{{$item->id}}">
                            {{$item->titulo}}
                            </a>
                        </div>
                        <div class="collapse multi-collapse show" id="multiCollapseExample{{$item->id}}">
                            <div class="card card-body">
                                <ul>
                                    @foreach ($item->archivos as $row)
                                        <li><a target="_blank" href="{{$row['url_archivo']}}">{{$row['nombre']}}</a></li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

  <div class="row">

    <div class="col">

    </div>
  </div>

</main>
@endsection
