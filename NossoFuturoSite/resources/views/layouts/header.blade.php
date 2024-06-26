<!-- Main Navbar-->
<nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="http://127.0.0.1:8000/" class="navbar-brand"><img class="img-fluid" src="{{ asset('img/logo.jpg') }}" alt="logo"></img></a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link active ">Início</a>
              </li>
              <li class="nav-item"><a href="articles" class="nav-link active ">Artigos</a>
              </li>
              <li class="nav-item"><a href="images" class="nav-link active ">Imagens</a>
              </li>
              <li class="nav-item"><a href="quizzs" class="nav-link active ">Quizzes</a>
              </li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text"><a href="{{ route('login') }}" class="active">Login</a><span>           </span><a href="{{ route('register') }}">Register</a></ul>
          </div>
        </div>
      </nav>