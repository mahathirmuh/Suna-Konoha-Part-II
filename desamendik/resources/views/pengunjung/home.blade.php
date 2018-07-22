@extends('master')
@section('content')

  <div class="container">
      <div class="col-lg-push-3 col-md-6 col-xs-12 col-xs-12">
        <div class="box">
          <div class="box-body text-justify">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{asset('img/thumb-1920-411820.jpg')}}" alt="Los Angeles">
                </div>

                <div class="item">
                  <img src="{{asset('img/thumb-1920-411820.jpg')}}" alt="Chicago">
                </div>

                <div class="item">
                  <img src="{{asset('img/thumb-1920-411820.jpg')}}" alt="New York">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="profil-desa">
              <div class="container-inner" style="margin-left: 15.5px;">
                <h3>Profil Desa</h3>
                <h4>Keadaan Umum Desa Mendik</h4>
                <p>
                  Desa Mendik merupakan salah satu desa di Kecamatan Longkali Kabupaten Paser. Desa mendik berdiri sejak 1942.
                  Jarak desa Mendik dari Kabupaten paser adalah 84 km dengan luas wilayah 10.026 ha.
                  <br>
                  <br>
                  Batas-batas wilayah Desa Mendik adalah sebagai berikut :
                  <table>
                    <tr>
                      <td class="col-xs-3">- Batas Utara</td>
                      <td class="col-xs-1">:</td>
                      <td class="col-xs-8">Penajam Paser Utara</td>
                    </tr>
                    <tr>
                      <td class="col-xs-3">- Batas Selatan</td>
                      <td class="col-xs-1">:</td>
                      <td class="col-xs-8">Desa Mendik Makmur</td>
                    </tr>
                    <tr>
                      <td class="col-xs-3">- Batas Barat</td>
                      <td class="col-xs-1">:</td>
                      <td class="col-xs-8">Desa Bente Tualan</td>
                    </tr>
                    <tr>
                      <td class="col-xs-3">- Batas Selatan</td>
                      <td class="col-xs-1">:</td>
                      <td class="col-xs-8">Desa Munggu</td>
                    </tr>
                  </table>
                </p>
              </div>
            </div>
            <br>
            <div class="visi">
              <h2 class="text-center">VISI</h2>
              <div class="container-inner" style="width: 90%; margin-left: 30px;">
                <h4 class="text-center">
                  <b>
                    “Menciptakan Masyarakat Desa Mendik yang Agamis, Mandiri, Berbudaya dan Sejahtera melalui Peningkatan sarana dan fasilitas penunjang kegiatan ibadah,
                    Peningkatan Pelayanan Publik, Peningkatan Kualitas SDM dan Penguatan ekonomi kerakyatan berbasis BUMDes”
                  </b>
                </h4>
              </div>
            </div>
            <br>
            <div class="misi">
              <h2 class="text-center" style="margin-bottom: 30px">MISI</h2>
              <div class="container" style="background:white; width:100%; margin-bottom: 70px;">
                <div class="col-xs-12">
                  <div class="row">
                    <div id="misi_1" class="col-md-6 col-lg-6 col-xs-12 col-xs-12">
                      <img src="{{asset('asset/number/009-one.png')}}" style="margin-right: 10px;float:left; border-radius: 50% 50% 50% 50%; width:15%; height:auto;">
                      <p style="color: black; font-size: 0.94em; padding: 5px; font-weight: bold;  ">
                        Meningkatkan gairah beragama melalui pelaksanaan kegiatan-kegiatan keagamaan dengan ditunjang fasilitas yang memadai
                      </p>
                    </div>
                    <div id="misi_2" class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-xs-12 col-sm-12">
                      <img src="{{asset('asset/number/008-two.png')}}" style="margin-right: 10px;float:left; border-radius: 50% 50% 50% 50%; width:15%; height:auto;">
                      <p style="color: black; font-size: 0.94em; padding-top: 5px; font-weight: bold;">
                        Mampu menyelenggarakan urusan pemerintah desa secara bersih bebas dari KKN serta taat pada peraturan dan perindagan yang berlaku, sebagai upaya meningkatkan pelayanan kepada masyarakat secara profesional dan sederhana
                      </p>
                    </div>
                    <div id="misi_3" class="col-md-6 col-lg-6 col-xs-12 col-xs-12">
                      <img src="{{asset('asset/number/007-three.png')}}" style="margin-right: 10px;float:left; border-radius: 50% 50% 50% 50%; width:15%; height:auto;">
                      <p style="color: black; font-size: 0.94em; padding: 5px; font-weight: bold;">
                        Mengembangkan program pembangunan desa dengan pola swadaya dan swakelola dalam rangka meningkatkan kapasitas SDM dan aparatur pemerintah
                      </p>
                    </div>
                    <div id="misi_2" class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-xs-12 col-sm-12">
                      <img src="{{asset('asset/number/four.png')}}" style="margin-right: 10px;float:left; border-radius: 50% 50% 50% 50%; width:15%; height:auto;">
                      <p style="color: black; font-size: 0.94em; padding-top: 5px; font-weight: bold;">
                        Mengembangkan kerjasama dengan instansi pemerintah, desa lain, swasta dan pihak ketiga lainnya untuk mendukung pengembangan ekonomi kerakyatan dengan berbasis BUMDes
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-pull-6 col-md-3 col-sm-12 col-xs-12">
        <div class="container" style="width: 110%;">
          <div class="box">
            <div class="box-header">
              <h4>Potensi Desa</h4>
            </div>
            <div class="box-body">
              <div class="kegiatan-desa">
                <div class="row">
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!-- End of Kegiatan Desa -->
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="container" style="width: 110%; margin-left: -30px; ">
          <div class="box">
            <div class="box-header">
              <h4>Kegiatan Desa Terbaru</h4>
            </div>
            <div class="box-body">
              <div class="kegiatan-desa">
                <div class="row">
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div><div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div><div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div><div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik melakukan kegiatan Gotong Royong</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                  <div class="container">
                    <a href="#">
                        <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                        <p class="title">Desa Mendik Melakukan Perbaikan Jalan</p>
                        <p class="upload-time">Selasa, 03 Juli 2018 16.36 WITA</p>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
              <!-- End of Kegiatan Desa -->
        </div>
      </div>
    </div>
  </div>

@endsection
