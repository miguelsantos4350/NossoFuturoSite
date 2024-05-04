@extends('distribution.layout')

@section('hero')
<!--Hero Section--> <!-- Adicionar AQUI UM SLIDESHOW -->
<section style="background: url({{ asset('distribution/img/hero.jpg') }}); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1 style>Nosso Futuro</h1>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Descobrir Mais</a>
      </div>
    </section>

@endsection

@section('content')

<section class="latest-posts" style="background: url({{ asset('distribution/img/divider-bg.jpg') }}); background-size: cover; background-position: center bottom" class="divider"> 
      <div class="container">
        <header> 
          <h1>Bem-vindo ao nosso site</h1>
          <p class="text-big">Aqui poderá conhecer vários factos sobre e nosso planeta, e várias práticas de como o perservar.<br>Tem acesso a Quizzes, Artigos, Galeria e Contactos</p>
        </header>
        <div class="row">
          <div class="post col-md-6">
            <div class="post-thumbnail"><a href="quizzs"><img src="{{ asset('distribution/img/quizz.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
              </div><a href="quizzs">
                <h3 class="h4">Quizzes</h3></a>
              <p class="text-muted"></p>
            </div>
          </div>
          <div class="post col-md-6">
            <div class="post-thumbnail"><a href="articles"><img src="{{ asset('distribution/img/article.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
              </div><a href="articles">
                <h3 class="h4">Artigos</h3></a>
              <p class="text-muted"></p>
            </div>
          </div>
          <div class="post col-md-6">
            <div class="post-thumbnail"><a href="images"><img src="{{ asset('distribution/img/image.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
              </div><a href="images">
                <h3 class="h4">Galeria</h3></a>
              <p class="text-muted"></p>
            </div>
          </div>
          <div class="post col-md-6">
            <div class="post-thumbnail"><a href="contacts"><img src="{{ asset('distribution/img/contact.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
              </div><a href="contacts">
                <h3 class="h4">Contactos</h3></a>
              <p class="text-muted"></p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--Latest Posts -->
    <?php
      $articles=App\Article::all();
    ?>
    <section class="latest-posts" style="background: url({{ asset('distribution/img/divider-bg.jpg') }}); background-size: cover; background-position: center bottom" class="divider"> 
      <div class="container">
        <header> 
          <h2>Últimos Artigos</h2>
          <p class="text-big">Os artigos mais recentes dos nossos utilizadores.</p>
        </header>
        <div class="row">
        @foreach($articles as $article)
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('distribution/img/blog-1.jpg') }}" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">{{ $article->created_at }}</div>
              </div><a href="post.html">
                <h3 class="h4">{{ $article->title }}</h3></a>
              <p class="text-muted">{{ $article->text }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
@endsection