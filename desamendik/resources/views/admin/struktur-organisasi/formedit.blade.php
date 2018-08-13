<div class="form-group">
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>


<!-- Thumbnail Taroh diatas  -->

<div class="form-group">
  <label class="col-sm-12">Nama Aparat Desa</label>
  <div class="col-sm-12">
    {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Aparat Desa....']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-12">Jabatan Aparat Desa</label>
  <div class="col-sm-12">
    {!! Form::text('jabatan', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Jabatan Aparat Desa....']) !!}
  </div>
</div>

<center>
  <div class="form-group">
    <div class="col-sm-12">
      <div class="panel panel-default" style="width: 400px;">
        <div class="panel-heading text-center">
          <b>Foto Aparat Desa</b>
        </div>
        <div class="panel-body text-center">
          <img id="preview" src="{{asset('images-struktur/'.$structure->photo)}}" alt="preview" width="300px" height="400px">
          <div class="col-sm-12" style="margin-top: 10px; display: none;">
            {!! Form::file('photo', ['id' => 'image']) !!}
          </div>
          <a href="javascript:changeProfile()" class="btn btn-success pull-right" style="margin-top: 10px;"> <i class="fa fa-upload"></i> Pilih Gambar </a>
        </div>
      </div>
    </div>
  </div>
</center>
