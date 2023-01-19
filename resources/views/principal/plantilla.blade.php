<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/otros/logo.ico') }}" rel="icon">
  <link href="{{ asset('plantillas/Sailor/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('plantillas/Sailor/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/Sailor/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/miestilo.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('plantillas/Sailor/assets/css/style.css') }}" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

</head>

<body>
  @include('principal.header')
  @yield('content')
  @include('principal.footer')

  <!-- Vendor JS Files -->
  <script src="{{asset('plantillas/bracketplus/app/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('plantillas/Sailor/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('plantillas/Sailor/assets/js/main.js')}}"></script>
  <script src="{{ asset('js/miscript.js')}}"></script>
  <script>

    $(document).ready(function(){
      $('#modalpopup').modal('show');       
    })
  </script>
</body>
</html>