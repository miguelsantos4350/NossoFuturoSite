<div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Nosso Futuro</h6>
            </div>
            <div class="contact-details">
              <p>Rua Filipa de Vilhena, Porto 666</p>
              <p>Telemóvel: 919 271 712</p>
              <p>Email: <a href="a32193@aluno.filipa-vilhena.edu.pt">miguel.a32193@filipa.pt</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="#">Minha Conta</a></li>
                <li> <a href="quizzs">Quizzes</a></li>
                <li> <a href="#">Políticas &amp; Privacidade</a></li>
              </ul>
              <ul class="list-unstyled">
                <li> <a href="#">FAQ</a></li>
                <li> <a href="#">Mais Sobre Nós</a></li>
                <li> <a href="contacts">Contactos</a></li>
              </ul>
            </div>
          </div>

          <?php
            $articles=App\Article::all();
          ?>

          <div class="col-md-4">
            @foreach($articles as $article)
            <div class="latest-posts"><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="{{ asset('distribution/img/small-thumbnail-1.jpg') }}" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>{{ $article->title }}</strong><span class="date last-meta">{{ $article->created_at }}</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="{{ asset('distribution/img/small-thumbnail-2.jpg') }}" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>{{ $article->title }}</strong><span class="date last-meta">{{ $article->created_at }}</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="{{ asset('distribution/img/small-thumbnail-3.jpg') }}" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>{{ $article->title }}</strong><span class="date last-meta">{{ $article->created_at }}</span></div>
                </div></a></div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2021. All rights reserved. Your great site.</p>
            </div>
            <div class="col-md-6 text-right">
              <p>Template By <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
              </p>
            </div>
          </div>
        </div>
      </div>