
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auto Parts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
@yield ('navbar')
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">Auto Parts</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
           
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
          </li>
         

        </ul>
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <br>

        <a href="{{route('index')}}">
          <img src="img/logo.png" width="250" height="200">


        </a>
        <br><br>
        <div class="list-group">

          @yield ('menu')
          


<!--Motores-->
<div style="background-color:#F2F2F2" align="center">

         <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Motores
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{route('nissans.index')}}" class="list-group-item">Nissan</a></li>
    <li><a href="{{route('bmws.index')}}" class="list-group-item">BMW</a></li>
    <li><a href="{{route('hondas.index')}}" class="list-group-item">Honda</a></li>
  </ul>
</div>

<!--suspenões-->
<br>

        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Suspensões
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{route('yellows.index')}}" class="list-group-item">Yellow Speed Racing</a></li>
    <li><a href="{{route('aps.index')}}" class="list-group-item">AP</a></li>
  </ul>
</div>

<br>
<!--Volantes-->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Volantes
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="{{route('omps.index')}}" class="list-group-item">OMP</a></li>
    <li><a href="{{route('sparcos.index')}}" class="list-group-item">Sparco</a></li>
  </ul>
</div>

<br>


<!--Backets-->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Backets
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
   <li><a href="{{route('bomps.index')}}" class="list-group-item">OMP</a></li>
   <li><a href="{{route('brecaros.index')}}" class="list-group-item">Recaro</a></li>

    
  </ul>
</div>
</div>
























                    


          

        </div>

      </div>
      <!-- /.col-lg-3 -->
@yield('galeria')
@yield('produtos')
     
  <!-- /.container -->

  <!-- Footer -->
  @yield('rodape')
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Auto Parts 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
