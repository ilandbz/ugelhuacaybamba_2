  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{URL::to('/')}}">UGEL</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="<?= URL::to('/') ?>">Home</a></li>
          <?php foreach($menus as $row){ ?>
            <?php if($row->link_menu=='#'){ ?>
                <li class="dropdown"><a href="#"><span><?= $row->nom_menu ?></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <?php foreach($submenus as $submenu){
                      if($submenu->categoriamenu==$row->id){ ?>
                        <li><a href="<?= $submenu->link_submenu ?>"><?= $submenu->nom_menu ?></a></li>
                    <?php } } ?>
                    </ul>
                </li>
            <?php }else{ ?>
                <li><a href="{{route('menus.showpaginaweb', $row->idpagina)}}"><?= $row->nom_menu ?></a></li>
            <?php } } ?>
          <li><a href="{{route('intranet')}}" class="getstarted">Intranet</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->  