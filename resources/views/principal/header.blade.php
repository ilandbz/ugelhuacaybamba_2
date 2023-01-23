  <header id="header" class="fixed-top d-flex">
    <div class="container">
      <div class="row">
        <div class="col-1 p-0">
          <div class="logo">
              <a href="{{URL::to('/')}}"><img src="{{asset('img/otros/logo.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
        <div class="col-2">
          <h1 style=" font-size: 16px; font-weight: 700; color: blue;"><br>UGEL HUACAYBAMBA</h1>
        </div>        
        <div class="col-9">
          <div class="row">
            <nav id="navbarsuperior" class="navbar flex-row-reverse">
              <ul>
                <li><a href="{{route('intranet')}}" class="p-2 mx-2">Intranet</a></li>
                <li><a target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=18840&id_tema=1&ver=D#.Xe5SdOhKjIU" class="border p-1 mx-2"><img src="{{asset('img/otros/portal.png')}}" alt="" height="30"></a></li>
              </ul>
              <p class="text-primary"><small><i class="fa-solid fa-phone"></i> 998 872 733 - <i class="fa-solid fa-envelope"></i> ue307hbba@hotmail.com</small></p>
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
                              <li><a href="{{$submenu->link_menu}}"><?= $submenu->nom_menu ?></a></li>
                          <?php } } ?>
                          </ul>
                      </li>
                  <?php }else{ ?>
                      <li><a href="{{$row->link_menu}}" style="color: white"><?= $row->nom_menu ?></a></li>
                  <?php } } ?>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->  
          </div>
        </div>
        
      </div>
    </div>
  
  </header><!-- End Header -->
    