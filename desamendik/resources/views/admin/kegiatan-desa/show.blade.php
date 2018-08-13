@extends('admin.master')
@section('content')
<!-- translate tanggal luar to tanggal indonesia -->
<?php
  function tgl_indo($tanggal){
    $bulan = array(
      1 =>
        'Januari',
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

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }
?>

<!-- Main Content -->

<div class="container">
  <div class="row">
    <div class="col-md-11" style="margin-left: 1px; width: 94%">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Preview Artikel Kegiatan Desa
        </div>
        <div class="panel-body">
          <h2 style="margin-bottom: 20px; margin-top: 10px; font-weight: bold">{{$activity->title}}</h2>
          <div class="panel panel-default" style="margin-bottom: 20px;">
            <div class="panel-body text-center">
              <img src="{{asset('images-kegiatan-desa/'.$activity->thumbnail)}}" alt="{{$activity->picture_title}}">
            </div>
          </div>
          <b>

            <?php
              echo tgl_indo($activity->created_at->format('Y-m-d'));
            ?> {{$activity->created_at->format('H:i')}} WITA

          </b> - {!! nl2br(e($activity->description)) !!}
          <a class="btn btn-warning pull-right" style="margin-top: 20px;" onClick="history.go(-1);"> <i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
