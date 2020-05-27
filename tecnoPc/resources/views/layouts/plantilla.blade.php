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
            <a class="navbar-brand" href="/">TecnoPc</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq">F.A.Q</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Catálogo </a>
                </ul>
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                                <img src="/cargas/avatares/{{Auth::User()->avatar}}" style="width:32px; height:32px; position:absolute; top: 10px; left: 10px; border-radius:50%" alt="">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('perfil') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('perfil-form').submit();"><i><svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg></i>
                                    {{ __('Perfil') }}
                                </a>


                                <form id="perfil-form" action="{{ route('perfil') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();"><i><svg class="bi bi-box-arrow-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M4.354 11.354a.5.5 0 000-.708L1.707 8l2.647-2.646a.5.5 0 10-.708-.708l-3 3a.5.5 0 000 .708l3 3a.5.5 0 00.708 0z" clip-rule="evenodd"/>
    <path fill-rule="evenodd" d="M11.5 8a.5.5 0 00-.5-.5H2a.5.5 0 000 1h9a.5.5 0 00.5-.5z" clip-rule="evenodd"/>
    <path fill-rule="evenodd" d="M14 13.5a1.5 1.5 0 001.5-1.5V4A1.5 1.5 0 0014 2.5H7A1.5 1.5 0 005.5 4v1.5a.5.5 0 001 0V4a.5.5 0 01.5-.5h7a.5.5 0 01.5.5v8a.5.5 0 01-.5.5H7a.5.5 0 01-.5-.5v-1.5a.5.5 0 00-1 0V12A1.5 1.5 0 007 13.5h7z" clip-rule="evenodd"/>
  </svg></i>
                                      {{ __('Cerrar Sesión') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>

                              </div>


                          </li>
                      @endguest
                      <li class="nav-item">
                          <div class="carrito">
                            <a href="{{ route('producto.carrito')}}">
                              <div class="carrito_icono"><img src="img/carrito.png"></div>
                              <div class="carrito_cont_texto">
                                  <div class="carrito_texto1">CANT:<span class="badge">{{ Session::has('cart') ? Session:: get('cart')->totalQty : '0' }} </span></div>
                                  <div class="carrito_texto2">TOTAL: <span class="badge">{{ Session::has('cart') ? Session:: get('cart')->totalPrice : '0' }} </span></div>
                                  </a>
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
                <script src="js/main.js"></script>
              </body>
              </html>
