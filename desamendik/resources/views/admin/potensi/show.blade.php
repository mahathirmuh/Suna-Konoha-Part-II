@extends('admin.master')
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

<!-- Main content -->
<div class="container">
  <div class="row">
    <div class="col-md-11" style="margin-left: 1px; width: 94%">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Preview Artikel Potensi
        </div>
        <div class="panel-body">
          <h2 style="margin-bottom: 20px; margin-top: 10px; font-weight: bold;">{{$potential->title}}</h2>
          <div class="panel panel-default" style="margin-bottom: 20px;">
            <div class="panel-body text-center">
              <img src="{{asset('images-potensi/'.$potential->thumbnail)}}" alt="{{$potential->picture_title}}">
            </div>
          </div>
          <b><?php

          echo tgl_indo($potential->created_at->format('Y-m-d'));

          ?> {{$potential->created_at->format('H:i')}} WITA</b> - {!! nl2br(e($potential->description)) !!}

					<a class="btn btn-warning btn-md pull-right" style="margin-top: 20px;" onClick="history.go(-1);"> <i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
