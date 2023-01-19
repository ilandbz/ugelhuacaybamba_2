@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    <div class="carousel-inner" role="listbox">
      <?php $estado=false; ?>
      @foreach($sliders as $row)
        <div class="carousel-item {{ $estado==false ? 'active' : '' }}" style="background-image: url(img/slider/{{ $row->img_slider }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{$row->titulo}}</span></h2>
              <p class="animate__animated animate__fadeInUp">{{$row->descripcioncorta}}</p>
              {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Leer Mas</a> --}}
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
<section class="bg-danger p-2">
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
    <section>
      <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile2.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile3.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile4.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile5.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile6.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile7.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <!--<img src="images/profile9.jpg" alt="" class="card-img">-->
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    </section>
    <section>
      <div class="container">
        <h2>ULTIMAS NOTICIAS</h2>
      <div class="row">
        @foreach ($noticias as $item)
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('img/noticias/'.$item->img1)}}" class="card-img-top" height="200px" />
            <div class="card-body">
              <h5 class="card-title">{{ Str::limit($item->titulo, 30) }}</h5>
              <p class="card-text">{{ Str::limit($item->descripcioncorta, 60) }}</p>
              <a href="{{route('noticia', $item->id)}}" class="btn btn-primary">Ver Mas</a> <span class="badge bg-secondary"> Publicacion : {{ substr($item->fechapubli, 0.8)}}</span>
            </div>
          </div>
        </div>            
        @endforeach
      </div>
      </div>
    </section>
    <section>
<div class="container">
  <div data-v-ad051cf0="" class="row mt-4 text-center">
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/procompite" target="_blank" class="btn btn-block btn-outline-danger boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-file fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Inscripción<br>Procompite</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="http://digital.regionhuanuco.gob.pe/" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa-solid fa-boxes-packing fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Sistema de gestión<br>digital</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/ldirectorio" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-laptop fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Directorio<br>institucional</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="http://www2.regionhuanuco.gob.pe/portal/admin/" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-cogs fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">acceso a <br>intranet</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="https://drive.google.com/file/d/1gYufSyJ1ivevw9h77ooai4XgE8Qg9LGn/view?usp=sharing" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-file fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">formato único de <br> trámite</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/lnormatividad/Acuerdo de Consejo/2020" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-chalkboard fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Normatividad<br>regional</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/pagina/102" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-clipboard-list fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">documentos de<br>gestión</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/lnormatividad/Ordenanza Regional/2015" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-columns fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Ordenanzas<br>regionales</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/lautoridades" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-diagnoses fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Nuestras <br>Autoridades</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/lnormatividad/Acuerdo de Consejo/2016" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-clipboard-check fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Acuerdo de consejo</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="http://www2.regionhuanuco.gob.pe/portal/proyectos/proyecto_lista.php" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-dice-d20 fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Consulta de <br>Obras</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <a data-v-ad051cf0="" href="/visitas" target="_blank" class="btn btn-block btn-outline-primary boton shadow anima_btn">
          <i data-v-ad051cf0="" class="fa fa-edit fa-2x"></i> 
          <p data-v-ad051cf0="" class="text-uppercase pt-3 lh-1">Registro de <br>Visitas</p>
       </a>
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
    <div data-v-ad051cf0="" class="col-xs-4 col-sm-2 col-6 mb-1">
       <!---->
    </div>
 </div>
</div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="{{route('directorioweb')}}">Directorio</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="{{ route('nosotros')}}">Nosotros</a></h4>
              <p>{{ Str::limit('La Unidad de Gestión Educativa Local Huacaybamba, es una entidad pública con fines netamente educativos, constituido desde el Órgano de Dirección, área de Gestión Pedagógica, Área de Gestión  Administrativa, Área de Gestión Institucional. Teniendo como objetivo promover el desarrollo del servicio educativo de calidad con equidad, valores, respetando la interculturalidad de los pueblos de nuestra jurisdicción, concordante con la política regional y nacional.
                Asimismo, cumpliendo con los protocolos establecidos por la normativa del estado de emergencia debido a la pandemia mundial, originado por el COVID-19; convirtiéndose en esta parte de la Región Huánuco como una de las UGEL que innovo en las plataformas virtuales para la continuación de los aprendizajes con nuestros directores, docentes, niños, niñas, adolescentes y toda la comunidad educativa de nuestra jurisdicción.
                Iniciando una nueva etapa de gestión a cargo del Mg. Hugo Eduardo Palomino Esteban , actual director de la UGEL Huacaybamba, asumiendo los compromisos para la ejecución al 100% del presupuesto y cumplimiento de metas para el presente año, asimismo para la construcción del Proyecto Educativo Local (PEL), generar las condiciones para el Buen Inicio del Año Escolar 2021, con monitoreo y talleres de fortalecimiento de capacidades.', 200) }}</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a href="{{ route('mision')}}">Mision</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a href="{{ route('vision')}}">Vision</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{ asset('plantillas/Sailor/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center"><h3>ENLACES EXTERNOS</h3></div>
            <br>
            <div data-v-ad051cf0="" class="swiper-container swiper-multiple swiper-container-initialized swiper-container-horizontal">
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