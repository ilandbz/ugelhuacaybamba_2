  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="<?= URL::to('/') ?>">UGEL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="
    <div class="row">
    </div>plantillas/Arsha/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="<?= URL::to('/') ?>">Home</a></li>
        <?php foreach($menus as $row){ ?>
        <?php if($row->link_menu=='#'){ ?>
            <li class="dropdown"><a href="#"><span><?= $row->nom_menu ?></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <?php foreach($submenus as $submenu){
                  if($submenu->idmenus==$row->idmenus){ ?>
                    <li><a href="<?= $submenu->link_submenu ?>"><?= $submenu->nom_submenu ?></a></li>
                <?php } } ?>
                </ul>
            </li>
        <?php }else{ ?>
            <li><a class="nav-link scrollto" href="<?= $row->link_menu ?>"><?= $row->nom_menu ?></a></li>
        <?php } } ?>
        <li><a class="getstarted scrollto" href="{{route('intr')}}">Intranet</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->