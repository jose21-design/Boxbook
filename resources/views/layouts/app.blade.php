<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <img src="img/lOGO.png">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

         <!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-med-12">
                            <h5>Sobre nosotros</h5>
                        </div>
                        <div class="col-12 col-lg-12 col-med-12">
                            <p>Misión</p>
                        </div>
                        <div class="col-12 col-lg-12 col-med-12">
                            <p>Visión</p>
                        </div>
                        <div class="col-12 col-lg-12 col-med-12">
                          <p>Blog</p>
                      </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                  <div class="row">
                      <div class="col-12 col-lg-12 col-med-12">
                          <h5>Ayuda y apoyo</h5>
                      </div>
                      <div class="col-12 col-lg-12 col-med-12">
                          <p>Información de envío</p>
                      </div>
                      <div class="col-12 col-lg-12 col-med-12">
                          <p>Devolución</p>
                      </div>
                      <div class="col-12 col-lg-12 col-med-12">
                        <p>Rastreo</p>
                    </div>
                  </div>
              </div>
              <div class="col-12 col-lg-3">
                 <div class="row">
                    <div class="col-12 col-lg-12 col-med-12">
                        <h5>Servicio al cliente</h5>
                    </div>
                    <div class="col-12 col-lg-12 col-med-12">
                        <p>Contáctanos</p>
                    </div>
                    <div class="col-12 col-lg-12 col-med-12">
                        <p>Rastreo</p>
                    </div>
                    <div class="col-12 col-lg-12 col-med-12">
                      <p>Puntos</p>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="row">
                 <div class="col-12 col-lg-12 col-med-12">
                     <h5>Encuentranos en</h5>
                 </div>
                 <div class="col-12 col-lg-12 col-med-12">
                     <img src="img/hola.PNG">
                 </div>
             </div>
        </div>
        </div>
    </footer>
  
    <div id="footerDivider" class="pt-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-12">
                  <p>BOX BOOK JOSE, Copyright 2020. Todos los derechos reservados</p>
              </div>
              <div class="col-lg-6 col-12 text-rigth">
                  <a href="">Noticias de privacidad</a>
              </div>
          </div>
      </div>
  </div>
      <!-- EndFooter -->

    </div>
</body>
</html>
