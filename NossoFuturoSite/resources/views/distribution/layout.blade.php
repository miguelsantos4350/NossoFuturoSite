<!DOCTYPE html>
<html>
  <head>
    @include('layouts.head')
  </head>
  <body>
    <header class="header">
      @include('layouts.header')
    </header>
    <!-- Hero Section-->
      @yield('hero')
  
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            @yield('content')
          </div>
        </div>
      </div>
    </section>
    <!-- Page Footer-->
    <footer class="main-footer">
    @include('layouts.footer')
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('distribution/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('distribution/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('distribution/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('distribution/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('distribution/vendor/@fancyapps/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('distribution/js/front.js') }}"></script>
  </body>
</html>
