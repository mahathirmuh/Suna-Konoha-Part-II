<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desa Mendik</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="icon" href="{{asset('img/favicon-16x16.png')}}">

        <!-- Styles -->
    </head>
    <body>
        <div class="header">
          <div class="col-xs-12">
            <div class="col-xs-2 col-lg-2">
              <a href="http://www.paserkab.go.id/home/web"><img src="{{ asset('img/daya-taka-colour_burned.png') }}" alt="logo desa" id="logo_desa"></a>
            </div>
            <div class="col-xs-8 col-lg-8">
              <a href="{{url('/')}}"> <p>Selamat Datang di Website <br>Desa Mendik <br>Agamis, Mandiri, Berbudaya dan Sejahtera</p> </a>
            </div>
            <div class="col-xs-2 col-lg-2">
              <a href="http://www.unmul.ac.id/"><img src="{{ asset('img/Logo-Unmul-2.png') }}" alt="logo_unmul" id="logo_unmul"></a>
            </div>
          </div>



        </div>
        <!-- End of Header -->
        <div class="navigation">
          <nav class="navbar navbar-blue">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-center">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/kegiatan-desa') }}">Kegiatan Desa</a></li>
                  <li><a href="{{url('/struktur-organisasi')}}">Struktur Organisasi Desa</a></li>
                  <li><a href="#">Peta Desa Mendik</a></li>
                </ul>
            </div>
          </nav>
        </div>
        <!-- <End of Navbar> -->

        <section class="content">
            @yield('content')
            <!-- End of Content -->
        </section>

        <footer>
          <div class="copyright">
            <b>
              © 2018 Copyright: <a href="http://www.unmul.ac.id/"> KKN 44 UNMUL</a>
              Design/Code by <a href="https://www.facebook.com/widyatamathebluedemon">TamaGotchii</a>
            </b>
          </div>
        </footer>
        <!-- End of Footer -->
        <script src="{{ asset('asset/js/jquery.js') }}"></script>
        <script src="{{ asset('asset/js/bootstrap.min.js') }}" charset="utf-8"></script>
    </body>
</html>
