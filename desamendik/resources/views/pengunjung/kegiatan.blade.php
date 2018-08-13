@extends('master')
@section('content')

<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

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
              @foreach($activities as $Activity)
              <div class="container">
                  <a href="{{url('kegiatan-desa/'.$Activity->id)}}">
                    <div>
                      <img src="{{ asset('images-kegiatan-desa/'.$Activity->thumbnail) }}" class="thumbnail">
                    </div>
                    <div>
                      <h3 class="title">{{$Activity->title}}</h3>
                      <p class="upload-time">
                        <?php
                          echo tgl_indo($Activity->created_at->format('Y-m-d'));
                        ?> {{$Activity->created_at->format('H:i')}} WITA
                      </p>
                      <p class="description">
                        {!! nl2br(e(str_limit($Activity->description,700))) !!}
                      </p>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
              {{$activities->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
