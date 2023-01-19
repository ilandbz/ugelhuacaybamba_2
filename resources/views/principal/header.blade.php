  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="logo me-auto"><a href="{{URL::to('/')}}"><img src="{{asset('img/otros/logo.png')}}" width="100px" alt=""></a></h1>
        </div>
        <div class="col">
          <div class="row">
            <nav id="navbarsuperior" class="navbar flex-row-reverse">
              <ul>
                <li><a href="{{route('intranet')}}" class="btn btn-primary p-2 mx-2">Intranet</a></li>
                <li><a target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=18840&id_tema=1&ver=D#.Xe5SdOhKjIU" class="btn btn-primary p-1 mx-2"><img src="{{asset('img/otros/portal.png')}}" alt="" height="30"></a></li>
              </ul>
            </nav>            
          </div>
        <div class="row">
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="active" href="<?= URL::to('/') ?>">UGEL</a></li>
              <?php foreach($menus as $row){ ?>
                <?php if($row->link_menu=='#'){ ?>
                    <li class="dropdown"><a href="#"><span><?= $row->nom_menu ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <?php foreach($submenus as $submenu){
                          if($submenu->categoriamenu==$row->id){ ?>
                            <li><a href="{{route('menus.showpaginaweb', $submenu->idpagina)}}"><?= $submenu->nom_menu ?></a></li>
                        <?php } } ?>
                        @if ($row->id==1) 
                            <li><a href="{{route('directorioweb')}}">DIRECTORIO</a></li>
                        @endif
                        
                        </ul>
                    </li>
                <?php }else{ ?>
                    <li><a href="{{route('menus.showpaginaweb', $row->idpagina)}}"><?= $row->nom_menu ?></a></li>
                <?php } } ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->  
        </div>

        </div>
        
      </div>
    </div>
  
  </header><!-- End Header -->
    