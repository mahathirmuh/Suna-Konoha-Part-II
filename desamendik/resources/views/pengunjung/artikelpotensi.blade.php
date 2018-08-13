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
      <div class="box-body">
        <h3 style="font-weight: bold; text-align: left; margin-left: 20px; margin-bottom: 20px;">{{$potential->title}}</h3>
        <center>
          <div class="panel panel-default" style="width: 92%;">
            <div class="panel-body">
              <center>
                <img src="{{asset('images-potensi/'.$potential->thumbnail)}}" alt="Gambar {{$potential->title}}">
              </center>
            </div>
          </div>
        </center>
        <p style="text-align: justify; margin-left: 20px; margin-right: 20px;">
          <span style="font-weight: bold;">
            <?php
              echo tgl_indo($potential->created_at->format('Y-m-d'));
            ?> {{$potential->created_at->format('H:i')}} WITA
          </span> - {!! nl2br(e($potential->description)) !!}
        </p>
      </div>
    </div>
  </div>
</div>


@endsection
