<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/api.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        <header>
            <!-- Intro settings -->
            <style>
              #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 58px;
              }
              @media (max-width: 991px) {
                #intro {
                  /* Margin to fix overlapping fixed navbar */
                  margin-top: 45px;
                }
              }
            </style>
        
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <div class="container-fluid">
                <!-- Navbar brand -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                  aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" aria-current="page" href="{{ url('/')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('detalle.index')}}" rel="nofollow">Blog</a>
                    </li>
                  </ul>
        
                  <ul class="navbar-nav d-flex flex-row">
                    <!-- Icons -->
                    @auth
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="" rel="nofollow">
                          Administraciòn
                        </a>
                      </li>
                      @else
                      <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{route('login')}}" rel="nofollow">
                          Ingresar
                        </a>
                      </li>
                      <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{route('register')}}" rel="nofollow">
                          Registrar
                        </a>
                      </li>
                    @endauth
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="" rel="nofollow" target="_blank">
                        <i class="fab fa-github"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- Navbar -->
        
            <!-- Jumbotron -->
           @hasSection ('header')
               @yield('header')
           @endif
            <!-- Jumbotron -->
          </header>
          <!--Main Navigation-->
        
          <!--Main layout-->
          <main class="my-5">
              @yield('content')
          </main>
          <!--Main layout-->
        
          <!--Footer-->
          <footer class="bg-light text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
          </footer>
          <!--Footer-->

        @livewireScripts
    </body>
</html>
