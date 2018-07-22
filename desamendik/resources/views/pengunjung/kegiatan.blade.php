@extends('master')
@section('content')


  <div class="container" style="width: 90%;">
    <div class="kegiatan">
      <div class="box">
        <div class="header-kegiatanlain">
          <div class="box-header">
            <h3> <b>Kegiatan-Kegiatan Desa</b> </h3>
          </div>
        </div>
        <div class="box-body">
          <div class="kd-lain">
            <div class="row">
              <div class="container">
                  <a href="#">
                    <div>
                      <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                    </div>
                    <div>
                      <h3 class="title">Desa Mendik melakukan perbaikan jalan</h3>
                      <p class="upload-time">Selasa, 03 Juli 2018 17.40 WITA</p>
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ini hanya taks tambahan, ini juga masih teks tambahan, yang ini juga
                      </p>
                    </div>
                  </a>
                </div>
                <div class="container">
                  <a href="#">
                    <div>
                      <img src="{{ asset('img/thumb-1920-411820.jpg') }}" class="thumbnail">
                    </div>
                    <div>
                      <h3 class="title">Desa Mendik melakukan gotong royong membersihkan selokan</h3>
                      <p class="upload-time">Selasa, 03 Juli 2018 17.40 WITA</p>
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
