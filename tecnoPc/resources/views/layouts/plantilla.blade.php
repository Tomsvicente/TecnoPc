<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">

    {{-- Fuentes --}}
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
   <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,700,300|Roboto+Slab:400,700,300,100" rel="stylesheet" type="text/css">

     {{-- Scripts --}}
   <script src="{{ asset('js/app.js') }}" defer></script>

    <title>
      @yield('title')

    </title>
</head>

<body>
  <header>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="home">TecnoPc</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq">F.A.Q</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home">Catálogo </a>
                </ul>
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                      <li class="nav-item">
                          <div class="carrito">
                              <div class="carrito_icono"><img src="img/carrito.png"></div>
                              <div class="carrito_cont_texto">
                                  <div class="carrito_texto1"><a href="productoDetalle">VER PEDIDO</a></div>
                                  <div class="carrito_texto2">$ 0</div>
                              </div>
                          </div>
                      </li>
                  </ul>
            </div>
        </nav>
    </div>
  </header>

        <section>

          @yield('section')

        </section>

        <section>
            @yield('content')
        </section>

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer">
                        <div class="row">
                    <footer class="col-md-12">
                            <section class="footer">
                                <div class="w1000">
                                    <ul id="social-media">
                                        <li><a href="#" class="facebook" target="_blank"></a></li>
                                    </ul>
                                <div class="box-right">
                                    <p><strong>12 e/ 59 y 60 (CP 1900) LA PLATA<br>
                </strong><br>
                                    Teléfono / WhatsApp: +54 15 111-1111 - Linea (0221) 111-1111 - <br>
                ecommerce@gmail.com | Horario de atención: de Lunes a Viernes 9 a 20hs</p>
                                </div>
                                </div>
                            </section>
                    </footer>
                    </div>
                </div>
                </div>
                </div>
              </body>
              </html>
