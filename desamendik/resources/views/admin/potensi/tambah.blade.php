@extends('admin.master')
@section('content')

<div class="box" style="border-top: 3px solid #3c8dbc">
  <div class="box-header" style="color: white; background: #3c8dbc">
    <h3 class="box-title">Tambah Data Artikel Potensi</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  {!! Form::open(['url'=>'penulis/simpan','class'=>'form-horizontal']) !!}
    <div class="box-body">
      @include('admin.potensi.form')
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  {!! Form::close() !!}
</div>

@endsection
