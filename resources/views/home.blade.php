@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<section id="hero" style="margin-top: 120px">
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
<section class="bg-primary p-2">
  <div class="container">
    <div class="row content">
      <div class="col">
        <a href="" class="btn btn-light">
          <i class="fa-solid fa-desktop"></i> Mesa de Partes 
        </a>
       
      </div>
      <div class="col">
          <button class="btn btn-light">Telefono <i data-v-430fa5ae="" class="fa fa-phone-volume"></i> 936451334</button>
      </div>
      <div class="col">
        <a href="" class="btn btn-light">
          <i class="fa-regular fa-envelope"></i> Correo Institucional
        </a>
      </div>
      <div class="col">
        <a href="" class="btn btn-light"><img data-v-430fa5ae="" src="{{asset('img/otros/portal.png')}}" alt="" height="30"></a>
      </div>
    </div>
  </div>
</section>
  <main id="main">
    <section class="mt-0 pt-1">
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
    <section>
      <div class="container">
        <div class="row mt-1 text-center">

          <div class="col-6">
            <h2>TRAMITES Y SERVICIOS</h2>
            <br>
            <div class="row">
              <div class="col">
                <a href="http://digital.regionhuanuco.gob.pe/" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa-solid fa-boxes-packing fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Sistema de gestión<br>digital</p>
                </a>              
              </div>
              <div class="col">
                <a href="/ldirectorio" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-laptop fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Directorio<br>institucional</p>
                </a>               
              </div>
              <div class="col">
                <a href="http://www2.regionhuanuco.gob.pe/portal/admin/" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-cogs fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">acceso a <br>intranet</p>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="https://drive.google.com/file/d/1gYufSyJ1ivevw9h77ooai4XgE8Qg9LGn/view?usp=sharing" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-file fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">formato único de <br> trámite</p>
                </a>
              </div>
              <div class="col">
                <a href="/pagina/102" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-clipboard-list fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">documentos de<br>gestión</p>
                </a>
              </div>
              <div class="col">
                <a href="/lautoridades" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-diagnoses fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Nuestras <br>Autoridades</p>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="/lnormatividad/Acuerdo de Consejo/2016" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn m-2 p-2">
                    <i class="fa fa-clipboard-check fa-2x"></i> 
                    <p class="text-uppercase pt-3 lh-1 msb">Acuerdo de consejo</p>
                </a>
              </div>
              <div class="col"></div>
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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <h2>GALERIA de FOTOS</h2>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            {{-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> --}}
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach ($registrosgaleria as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{asset('img/imageneventos/'.$item->img)}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{$item->titulo}}</h4>
                    <p>{{$item->descripcion}}</p>
                    <div class="portfolio-links">
                      <a href="{{asset('img/imageneventos/'.$item->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->titulo}}"><i class="bx bx-plus"></i></a>
                      <a href="{{route('portafoliodet', $item)}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="{{$item->descripcion}}"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>    
          @endforeach


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center"><h3>ENLACES EXTERNOS</h3></div>
            <br>
            <div class="swiper-container swiper-multiple swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-96.3333px, 0px, 0px);">
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="https://apps.contraloria.gob.pe/infobras/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/Rl0wASlIqPa8n0KSJmmUtsAMY1gYWtNIEUSQgt9B.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.inei.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/DDNODNEQNFsAt3EMCzY1S6cQvD9jLNjndlJ351k1.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide swiper-slide-prev" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.indeci.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/PHqi2tTALhG6H8QYeua069m44rqiuZ2Q7kLPZ8GT.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide swiper-slide-active" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.iiap.org.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/UoQ9u7im8qgWFWF1uwL56v0C4HA7aRI5aA0GkJZb.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide swiper-slide-next" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.fondep.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/y52Bu1jI8r2DaZgNfjoGT76qipbObt6jsrozh9gC.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.sanciones.gob.pe/transparencia/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/WVrTo4iCjeMMiwGJTkBWbwwfE8IkWzUSKaYIYEnY.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.pronied.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/Q6O0CZV3iBUhOrgDB8V4UlHLJg4kfD7krhuUOqh7.png" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://casillas.pj.gob.pe/redamWeb/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/ScLbFiqMHPxarakb9NhjFCuhsiS3dv9gQcQnH7Gn.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.midis.gob.pe/sellomunicipal/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/WeHBa7I37i0hA4ZyZ10oyAcMo1Lxo3q7iVcTXM4E.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.osce.gob.pe/" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/upcQRia9CpKnwAfo0cuXwGcN9YW1duRD7r87FumW.jpg" fluid=""></a></div>
                </div>
                <div class="swiper-slide" style="width: 152.667px; margin-right: 40px;">
                    <div class="swiper-text pt-md-1 pt-sm-50"><a href="http://www.mef.gob.pe/index.php?option=com_content&amp;view=section&amp;id=28&amp;Itemid=100674&amp;lang=es" target=""><img src="http://gestionportales.regionhuanuco.gob.pe/storage/enlaceref/ZxRFtujmE0zAu9ewhJWACYUN3aQhxB48qo66FLRj.jpg" fluid=""></a></div>
                </div>
              </div>
              {{-- <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
              <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div> --}}
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php if(isset($popup->titulopopup)){ ?>
  <div class="modal modal-lg fade" id="modalpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$popup->titulopopup}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?= $popup->contenido;
          $image_path = public_path('img/popup/').$popup->imagen; 
          if (file_exists($image_path)){  ?>    
              <img src="{{asset('img/popup/'.$popup->imagen)}}" class="img-fluid img-thumbnail" />
          <?php } ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <?php }  ?>
@endsection