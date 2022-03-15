<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BookFundi Caselaw') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="http://127.0.0.1:8000/favicon.ico" type="image/x-icon">
    
    <!-- Twitter Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap/bootstrap.css') }}">

    <!-- Fortawesome -->
    <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/styles/custom/custom.css') }}">
    
  </head>
  <body>
    <header>

      <div class="navbar navbar-expand-lg flex-nowrap navbar-light  " id="navbar">
        <div class="container">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerMenu" aria-controls="#navbarTogglerMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        @auth
          <a class="navbar-brand my-0 mr-md-auto" href="http://127.0.0.1:8000">
            <img src="{{ asset('assets/images/brand.jpeg') }}"  class="d-inline-block align-top" alt="BookFundi Logo" style="height: 60px;">
          </a>
        @endauth
          
          
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerMenu">

          <ul class="navbar-nav my-2 my-md-0">
            
            <li class="nav-item ">
              <a class="nav-link " href="{{ url('home') }}">Caselaws</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('pricing') }}">Pricing</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('backend/users') }}">Backend</a>
            </li>
            
          </ul>
            
        </div>

        
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-secondary">
                        Logout
                    </button>
                </form>
                @else
                <a class="btn btn-outline-secondary ml-2" href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a class="btn btn-secondary ml-3" href="{{ route('register') }}">Sign Up</a>
                @endif
            @endauth
            </div>
        @endif
        
                
      </div>
      
        
        
      </div>
    </header>
  
     

  @yield('content')


        
    <footer>
    <div class="footer" >
        
        <div class="container">
            <hr class="mt-0">
            <div class="row align-items-center justify-content-md-between pb-4">
                <div class=col-md-6>
                    <div class="copyright text-sm text-center text-md-left">
                        &copy;2022 <a href="https://BookFundi.com" target="_blank">BookFundi Publishing Ltd</a>
                        . All rights reserved
                    </div>
                </div>
                <div class=col-md-6>
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}" ></script>
  </body>
</html>
