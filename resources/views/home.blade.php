@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<section id="hero" style="margin-top: 90px">
  <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
      <?php $estado=false; ?>
      @foreach($sliders as $row)
        <div class="carousel-item {{ $estado==false ? 'active' : '' }}" style="background-image: url(img/slider/{{ $row->img_slider }});">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{$row->titulo}}</span></h2>
              <p class="animate__animated animate__fadeInUp">{{$row->descripcioncorta}}</p>
              @if ($row->link!=null && $row->link!='')
              <a target="_blank" href="{{$row->link}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">IR</a>                  
              @endif
            </div>
          </div>
        </div>
      <?php $estado = true ?>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</section><!-- End Hero -->
  <main id="main">
    <section class="mt-3 pt-1">
      <div class="container">
        <div class="row p-2" style="background: url(img/rayaazul.svg), rgb(207, 226, 255); border-radius: 4px;">
          <div class="slide-container swiper">
            <h2>ULTIMAS NOTICIAS</h2>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                  @foreach ($noticias as $item)
                  <div class="card swiper-slide">
                      <img src="{{asset('img/noticias/'.$item->img1)}}" class="card-img-top" height="200px" />
                      <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($item->titulo, 30) }}</h5>
                        <p class="card-text">{{ Str::limit($item->descripcioncorta, 40) }}</p>
                        <div class="card-footer">
                          @php
                              $date = date_create($item->fechapubli);
                          @endphp
                          <span class="blockquote-footer"> Pub : {{ date_format($date, 'd-m-Y')}}</span>&nbsp;
                          <a href="{{route('noticia', $item->id)}}" class="btn btn-sm btn-danger">Ver Mas</a>
                        </div>
                      </div>
                  </div>         
                  @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
          <div align="right"><a href="{{route('allnoticias')}}" class="btn btn-primary btn-sm">
            Ver más noticias
            <i aria-hidden="true" class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section class="pt-0">
      <div class="container">
        <div class="row text-center" style="background: url(img/rayaazul.svg), rgb(207, 226, 255); border-radius: 4px;">
          <div class="col-6">
            <h2>TRAMITES Y SERVICIOS</h2>
            <br>
            <div class="row">
              <div class="col">
                <a href="http://digital.regionhuanuco.gob.pe/login" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa-solid fa-boxes-packing fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Sistema de gestión<br>digital</p>
                </a>              
              </div>
              <div class="col">
                <a href="{{route('directorioweb')}}" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-laptop fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Directorio<br>institucional</p>
                </a>               
              </div>
              <div class="col">
                <a href="{{route('intranet')}}" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-cogs fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">acceso a <br>intranet</p>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="http://127.0.0.1:8000/archivos/1674275325.pdf" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-file fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">formato único de <br> trámite</p>
                </a>
              </div>
              <div class="col">
                <a href="https://www.regionhuanuco.gob.pe/pagina/102" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-clipboard-list fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">documentos de<br>gestión</p>
                </a>
              </div>
              <div class="col">
                <a href="{{route('directorioweb')}}" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-diagnoses fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Aula Virtual</p>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="https://miboletasc.minedu.gob.pe/Account/Login" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-clipboard-check fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Mi boleta</p>
                </a>
              </div>
              <div class="col">
                <a href="{{route('galerias')}}" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa-solid fa-image"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Galeria de Imagenes</p>
                </a>                
              </div>
              <div class="col">
                <a href="/visitas" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-edit fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Registro de <br>Visitas</p>
                </a>
              </div>            
            </div>
          </div>
          <div class="col-6">
            <h2>VIDEOS </h2><br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D2TE209uRMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
      </div>
      </div>
    </section>
    <section class="pt-0">
      <div class="container" style="background: url(img/rayaazul.svg), rgb(207, 226, 255); border-radius: 4px;">
        <div class="row">
          <div class="col" align="right">
            <h3>COMUNICADOS</h3><br>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                @foreach ($comunicados as $item)
                <div class="carousel-item active">
                  <img src="{{asset('img/comunicados/'.$item->imagen)}}" class="d-block w-100" width="" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{$item->titulo}}</h5>
                    @if ($item->url!='' && $item->url!=null)
                        <a target="_blank" href="{{$item->url}}" title="Ver Mas"><i class="fa-solid fa-eye"></i></a>
                    @endif
                  </div>
                </div>            
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

            </div><br>
            <a href="{{route('comunicadosall')}}" class="btn btn-primary btn-sm">
              Ver más
              <i aria-hidden="true" class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="col-6">
            <h3>POST FACEBOOK</h3>
            <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FUE307HUACAYBAMBA%2Fposts%2Fpfbid0CCEWaHvsBqESf9LNCPkxsmzESexJE51bVkMDKUEyi4WufBrGWMu9bbPyrSWhqbS9l&show_text=true&width=500" width="500" height="387" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
        </div>

      </div>
    </section>
    <section>
      <div class="container" style="background: url(img/rayaazul.svg), rgb(207, 226, 255); border-radius: 4px;">
        <h2>ENLACES EXTERNOS</h2>
        <div class="row">
          <div class="slide-container swiper">
            <div class="slide-content">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="padding: 0px; margin: 0px">
                    <a href="https://apps.contraloria.gob.pe/infobras/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/Rl0wASlIqPa8n0KSJmmUtsAMY1gYWtNIEUSQgt9B.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.inei.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/DDNODNEQNFsAt3EMCzY1S6cQvD9jLNjndlJ351k1.jpg" fluid=""></a>
                      <a href="http://www.inei.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/DDNODNEQNFsAt3EMCzY1S6cQvD9jLNjndlJ351k1.jpg" fluid=""></a>
                      <a href="http://www.inei.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/DDNODNEQNFsAt3EMCzY1S6cQvD9jLNjndlJ351k1.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                    <a href="http://www.indeci.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/PHqi2tTALhG6H8QYeua069m44rqiuZ2Q7kLPZ8GT.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.iiap.org.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/UoQ9u7im8qgWFWF1uwL56v0C4HA7aRI5aA0GkJZb.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.fondep.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/y52Bu1jI8r2DaZgNfjoGT76qipbObt6jsrozh9gC.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.sanciones.gob.pe/transparencia/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/WVrTo4iCjeMMiwGJTkBWbwwfE8IkWzUSKaYIYEnY.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.pronied.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/Q6O0CZV3iBUhOrgDB8V4UlHLJg4kfD7krhuUOqh7.png" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://casillas.pj.gob.pe/redamWeb/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/ScLbFiqMHPxarakb9NhjFCuhsiS3dv9gQcQnH7Gn.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.midis.gob.pe/sellomunicipal/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/WeHBa7I37i0hA4ZyZ10oyAcMo1Lxo3q7iVcTXM4E.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.osce.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/upcQRia9CpKnwAfo0cuXwGcN9YW1duRD7r87FumW.jpg" fluid=""></a>
                  </div>
                  <div class="swiper-slide">
                      <a href="http://www.mef.gob.pe/index.php?option=com_content&amp;view=section&amp;id=28&amp;Itemid=100674&amp;lang=es" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/ZxRFtujmE0zAu9ewhJWACYUN3aQhxB48qo66FLRj.jpg" fluid=""></a>
                  </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php if(isset($popup->titulopopup)){ ?>
  <div class="modal fade" id="modalpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-0">
        <div class="modal-header p-0">
          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">X</button>
        </div>
        <div class="modal-body p-0" title="{{$popup->titulo}}">
            <img alt="{{$popup->titulo}}" src="{{asset('img/popup/'.$popup->imagen)}}" class="img-fluid img-thumbnail" />
        </div>
      </div>
    </div>
  </div>
  <?php }  ?>
@endsection