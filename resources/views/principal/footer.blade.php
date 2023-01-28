  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>UGEL HUACAYBAMBA</h3>
              <p>
                AV. 28 de julio Nº 502 - 504 10830 Huacaybamba, Peru<br>
                <strong>Phone:</strong> 998 872 733<br>
                <strong>Email:</strong> ue307hbba@hotmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a target="_blank" href="https://www.facebook.com/UE307HUACAYBAMBA" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
          <h4>LO MAS BUSCADO</h4>            
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://127.0.0.1:8000/menus/paginaweb/14">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('convocatoriaweb', 'CAS')}}">Convocatoria CAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SGD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aulas Virtuales</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('allnoticias')}}">Notas de Prensa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('comunicadosall')}}">Comunicados</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('galerias')}}">Galeria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Agenda Director</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://127.0.0.1:8000/menus/paginaweb/24">Resoluciones</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
              <div id="block-5" class="widget widget_block widget_text">
                 <p>Ley Nº 27444 DECRETO SUPREMO Nº 042-2011-PCM, es obligación de las Entidades del Sector Público de contar con un Libro de Reclamaciones</p>
              </div>
              <div id="block-9" class="widget widget_block widget_media_gallery">
                 <figure class="wp-container-2 wp-block-gallery-1 wp-block-gallery has-nested-images columns-default is-cropped">
                    <figure class="wp-block-image size-full"><a href="https://reclamos.servicios.gob.pe/?institution_id=67"><img loading="lazy" width="383" height="148" data-id="2720" src="{{asset('img/reclamaciones.jpg')}}" alt="" class="wp-image-2720" srcset="{{asset('img/reclamaciones.jpg')}} 383w, https://drehuanuco.gob.pe/wp-content/uploads/2022/08/libo-1-300x116.png 300w" sizes="(max-width: 383px) 100vw, 383px"></a></figure>
                 </figure>
              </div>
              <div id="block-12" class="widget widget_block widget_text">
                 <p></p>
              </div>
          </div>
        </div>
      </div>
    </div>
@php
            $image_path = public_path('otros/contador.txt');        
        if (!file_exists($image_path)){
            touch($image_path);
        }
        $contenido = trim(file_get_contents($image_path));
        # Si está vacío, lo igualamos a cero
        if ($contenido == "") {
            $visitas = 0;
        } else {
            $visitas = intval($contenido);
        }
        $visitas++;
        file_put_contents($image_path, $visitas);
@endphp


<div class="row">
  <div class="col">
      <div class="copyright">
        &copy; Copyright <strong><span>UGEL HUACAYBAMBA</span></strong>. Todos los derechos Reservados
      </div>
  </div>
  <div class="col">
    <div class="copyright text-center">
    VISITA NUMERO : {{$visitas}}
    </div>
  </div>
  <div class="col">
    <div class="copyright text-end me-4">
      Desarrollado por <a href="https://www.alvacor.org.pe/">ALVACOR</a>
    </div>
  </div>
</div>

      {{-- <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}

  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>