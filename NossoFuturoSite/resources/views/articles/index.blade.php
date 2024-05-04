@extends('distribution.layout')

@section('content')

<h1>Artigos</h1><br>
<p class="text-big">Aqui poderá visualizar ou postar um artigo. Poderá comentar e/ou gostar de um artigo se fizer <a href="login">login</a>.</p><br><br><br><br>

<section class="featured-posts no-padding-top">
      <div class="container">
        <!-- Post-->
        <?php
          $articles=App\Article::all();
        ?>
         @foreach($articles as $article)
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                  <header class="post-header">
                      <h2 class="h4">{{ $article->title }}</h2></a>
                  </header>
                  <p>{{ $article->text }}</p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="{{ asset('distribution/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{ $article->user_id }}</span></div></a>
                    <div class="date"><i class="icon-clock"></i> {{ $article->created_at }}</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </footer>
                </div>
              </div>
          </div>
          <div class="image col-lg-5"><img src="{{ asset('distribution/img/featured-pic-1.jpeg') }}" alt="..."></div>
        </div> <br>
        <!-- Post
        <div class="row d-flex align-items-stretch">
          <div class="image col-lg-5"><img src="{{ asset('distribution/img/featured-pic-2.jpeg') }}" alt="..."></div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                  <header class="post-header">
                      <h2 class="h4">{{ $article->title }}</h2></a>
                  </header>
                  <p>s</p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="{{ asset('distribution/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{ $article->user_id }}</span></div></a>
                    <div class="date"><i class="icon-clock"></i> {{ $article->created_at }}</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </footer>
                </div>
              </div>
          </div>
        </div>
         Post 
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                    <h2 class="h4">{{ $article->title }}</h2></a>
                </header>
                <p>{{ $article->text }}</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="{{ asset('distribution/img/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $article->user_id }}</span></div></a>
                  <div class="date"><i class="icon-clock"></i> {{ $article->created_at }}</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="{{ asset('distribution/img/featured-pic-3.jpeg') }}" alt="..."></div>
        </div>  -->
        @endforeach
      </div>
    </section>

    <!-- ADICIONAR PAGINACAO AQUI -->


    <!-- Criar artigo -->


    <h2>Criar um artigo</h2><br>
<p class="text-big">Crie um artigo, após fazer <a href="login">login</a>.</p><br><br><br><br>

<p class="text-big">Clique <a href="carticles">aqui</a> para criar um artigo.</p><br>
    @endsection
    