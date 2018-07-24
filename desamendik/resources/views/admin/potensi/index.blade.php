@extends('admin.master')
@section('content')


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
          <th class="text-center col-xs-3">Judul</th>
          <th class="text-center col-xs-4">Deskripsi</th>
          <th class="text-center col-xs-3">Thumbnail</th>
          <th class="text-center col-xs-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach($potential as $Potential)
          <tr>
            <?php
              $x=1;
            ?>
            <td class="text-center"><?php echo $x; ?></td>
            <td>{{$Potential->title}}</td>
            <td>{{$Potential->description}}</td>
            <td>{{$Potential->thumbnail}}</td>
            <td class="text-center">
              <a href="#" class="btn btn-success btn-xs"> <i class="fa fa-eye"></i> </a>
              <a href="" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"></i> </a>
              <a href="#" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
            </td>
            <?php $x++; ?>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5"> <a href="" class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Tambah Artikel</a> </td>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

@endsection
