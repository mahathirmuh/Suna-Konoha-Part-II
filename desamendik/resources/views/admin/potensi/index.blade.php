@extends('admin.master')
@section('content')


<?php

  function tgl_indo($tanggal){
    $bulan = array (
      1 =>
        'Januari',
        'Februari',
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

<!-- Main content -->
  <div class="box" style="border-top: 3px solid #3c8dbc">
    <div class="box-header" style="color: white; background: #3c8dbc">
      <h3 class="box-title">Tabel Artikel Potensi Desa Mendik</h3>
    </div>
  <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th class="text-center">No.</th>
          <th class="text-center col-xs-2">Judul Artikel</th>
          <th class="text-center col-xs-4">Isi Artikel</th>
          <th class="text-center col-xs-2">Gambar Artikel</th>
          <th class="text-center col-xs-2">Tanggal Upload</th>
          <th class="text-center col-xs-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
          <?php
            $x=1;
          ?>
          @foreach($potential as $Potential)
          <tr>
            <td class="text-center"><?php echo $x; ?></td>
            <td>{{$Potential->title}}</td>
            <!-- <td>{{$Potential->description}}</td> -->
            <td> {!! nl2br(e(str_limit($Potential->description, 200))) !!}</td>
            <td class="text-center"><img src="/images-potensi/{{ $Potential->thumbnail }}" style="width: 100px; height: auto;"></td>
            <td class="text-center col-xs-2">
              <?php
                echo tgl_indo($Potential->created_at->format('Y-m-d'));
              ?> {{$Potential->created_at->format('H:1')}} WITA
            </td>
            <td class="text-center" style="vertical-align: middle;">
              <a href="{{url('admin/potensi-lihat/'.$Potential->id)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Preview Artikel"> <i class="fa fa-eye"></i> </a>
              <a href="{{url('admin/potensi-edit/'.$Potential->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit Artikel"> <i class="fa fa-pencil"></i> </a>
              <a href="{{url('admin/potensi-hapus/'.$Potential->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Artikel"> <i class="fa fa-trash"></i> </a>
            </td>
            <?php $x++; ?>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6"> <a href="{{url('admin/potensi-tambah')}}" class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Tambah Artikel</a> </td>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

@endsection
