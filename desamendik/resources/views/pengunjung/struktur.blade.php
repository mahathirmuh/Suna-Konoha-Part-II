@extends('master')
@section('content')


  <div class="container" style="width: 90%;">
    <div class="kegiatan">
      <div class="box">
        <div class="header-kegiatanlain">
          <div class="box-header">
            <h3> <b>Struktur Organisasi Desa Mendik</b> </h3>
          </div>
        </div>
        <div class="box-body">
          <div class="struktur">
            <div class="container">
              @foreach($structures as $Structure)
              <div class="col-xs-4 col-lg-2">
                <div class="box-img">
                  <div class="container-inner">
                    <img src="{{asset('images-struktur/'.$Structure->photo)}}" alt="Kades" class="image">
                    <div class="overlay">
                      <div class="text">
                        <p>{{$Structure->nama}}</p>
                        <p>{{$Structure->jabatan}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
