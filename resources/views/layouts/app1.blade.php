<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Stack - Bootstrap 4 Business Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/line-icons.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/owl.theme.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nivo-lightbox.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      
      @include('component.navbar')
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      
      @include('component.hero')
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    @yield('feature')
    
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    @yield('services')
   
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
    @yield('video-promo')
    
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
    @yield('team')
    
    <!-- Team Section End -->

    <!-- Counter Section Start -->
    @yield('counter')
    
    <!-- Counter Section End -->

    <!-- Pricing section Start --> 
    @yield('pricing')
    
    <!-- Pricing Table Section End -->
    @yield('skill-area')
    
    
    <!-- Portfolio Section -->
    @yield('portfolios')
    
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
    @yield('testimonial')
    
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    @yield('blog')
    
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    @yield('clients')
    
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    @yield('contact')
    
    <!-- Contact Section End -->
    
    <!-- Copyright Section Start -->
    
    @include('component.copyright')
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>  
    <script src="{{ asset('assets/js/nivo-lightbox.js') }}"></script>     
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>     
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>   
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.min.js') }}"></script>
      
  </body>
</html>
