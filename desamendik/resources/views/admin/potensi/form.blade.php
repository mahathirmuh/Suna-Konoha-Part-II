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
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <b>Gambar Artikel Potensi</b>
      </div>
      <div class="panel-body text-center">
        <img id="preview" src="http://via.placeholder.com/1000x380" alt="preview" width="1000px" height="380px">
        <div class="col-sm-12" style="margin-top: 10px; display: none;">
          {!! Form::file('thumbnail', ['id' => 'image']) !!}
        </div>
        <a href="javascript:changeProfile()" class="btn btn-success pull-right" style="margin-top: 10px;"> <i class="fa fa-upload"></i> Pilih Gambar </a>
      </div>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-sm-12">Judul Artikel Kegiatan Desa</label>
  <div class="col-sm-12">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Judul Artikel....']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-12">Isi Artikel Kegiatan Desa</label>
  <div class="col-sm-12">
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Isi Artikel....', 'rows' => '20']) !!}
  </div>
</div>
