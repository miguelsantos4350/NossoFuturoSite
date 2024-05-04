<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.0-dist/css/bootstrap-reboot.css')}}">
    <link rel="shortcut icon" href="../icons/filmes.ico" />
    <title>BFF</title>
  </head>
  <body>
  @include('layouts.header')
  
	<div class="containers-fluid" style="padding: 0px !important">
    	<div class="row" style="width: 100%;">
			<div class="col-md-9">

            @yield('content')
			
			</div>
			<div class="col-md-3" >
			@include('layouts.aside')
			</div>
    	</div>
	</div>
	
		<div class="container-fluid" style=" padding: 0px !important; margin:0px !important;">
			<div id="row">
				@include('layouts.footer')
			</div>
		</div>
	
	
		
		
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>