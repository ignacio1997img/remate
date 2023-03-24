<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{ asset('template/img/logo.png')}}" alt=""> -->
        <img src="{{ asset('image/remate.jpg')}}" alt="">
        <h1 style="color: rgb(255, 255, 255); font-family: Arial, Helvetica, sans-serif;">REMATES</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" style="color: rgb(0, 0, 0)">Inicio</a></li>
          <li><a href="single-post.html" style="color: rgb(0, 0, 0)">En vivo</a></li>
          <li><a href="single-post.html" style="color: rgb(0, 0, 0)">Noticias</a></li>

          <li><a href="{{url('register')}}" style="color: rgb(0, 0, 0)">Registrate</a></li>
          <li><a href="{{route('login')}}" style="color: rgb(0, 0, 0)">Iniciar Sesión</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        {{-- <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a> --}}
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        {{-- <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form --> --}}

      </div>

    </div>

  </header>