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
        <b>Edit Gambar Artikel Kegiatan Desa</b>
      </div>
      <div class="panel-body text-center">
        <img id="preview" src="{{asset('images-kegiatan-desa/'.$activity->thumbnail)}}" alt="preview" width="1000px" height="380">
        <div class="col-sm-12" style="margin-top: 10px; display: none;">
          {!! Form::file('thumbnail', ['id' => 'image']) !!}
        </div>
        <a href="javascript:changeProfile()" class="btn btn-success pull-right" style="margin-top: 10px;"> <i class="fa fa-upload"></i> Pilih Gambar </a>
      </div>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-sm-2">Judul Artikel</label>
  <div class="col-sm-12">
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Judul Artikel....']) !!}
  </div>
</div>

<div class="form-group">
  <label class="col-sm-2">Isi Artikel</label>
  <div class="col-sm-12">
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Isi Artikel....', 'rows' => '20']) !!}
  </div>
</div>
