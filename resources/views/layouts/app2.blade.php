<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from deothemes.com/envato/deus/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2019 08:12:58 GMT -->
<head>
  <title>Deus | Home 1 Default</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('front/css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('front/img/favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('front/img/apple-touch-icon.html') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front/img/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front/img/apple-touch-icon-114x114.png') }}">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="{{ asset('front/js/lazysizes.min.js') }}"></script>

</head>

<body class="bg-light style-default style-rounded">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->   
  @include('component.sidenav') 
  
  <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Top Bar -->
    @include('component.topbar')
    
    <!-- end top bar -->        

    <!-- Navigation -->
    @include('component.header')
    
    <!-- end navigation -->
  

    <!-- Trending Now -->
    @include('component.trending')
   
    
    <!-- Featured Posts Grid -->      
    @yield('featured')
    
    <!-- end featured posts grid -->
    @yield('main-container')
    <!-- end main container -->

    <!-- Footer -->
    @include('component.footer')
    
    <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->

  
  <!-- jQuery Scripts -->
  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/easing.min.js') }}"></script>
  <script src="{{ asset('front/js/owl-carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/flickity.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/js/twitterFetcher_min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.newsTicker.min.js') }}"></script>  
  <script src="{{ asset('front/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('front/js/scripts.js') }}"></script>

</body>

<!-- Mirrored from deothemes.com/envato/deus/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2019 08:13:53 GMT -->
</html>