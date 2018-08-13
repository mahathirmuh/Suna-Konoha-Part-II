@extends('admin.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-11" style="margin-left: 1px; width: 94%">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Tambah Data Artikel Kegiatan Desa
        </div>
        <div class="panel-body">
          {!! Form::open(['url'=>'admin/kegiatan-desa-simpan','class'=>'form-horizontal', 'files' => true]) !!}
          @include('admin.kegiatan-desa.form')

          <div style="width: 100%; text-align: center;">
            <button type="submit" id="upload" class="btn btn-primary pull-right" style="margin-left: 2px; margin-top: 10px;"> <i class="fa fa-check"></i> Simpan </button>
            <a class="btn btn-danger pull-right" onClick="window.location.reload();" style="margin-top: 10px; margin-left: 2px;"> <i class="fa fa-trash"></i> Bersihkan </a>
            <a href="{{url('admin/kegiatan-desa')}}" class="btn btn-warning pull-right" style="margin-top: 10px"> <i class="fa fa-arrow-left"></i> Kembali </a>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function changeProfile() {
        $('#image').click();
    }
    $('#image').change(function () {
        var imgPath = this.value;
        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        if (ext == "png" || ext == "jpg" || ext == "jpeg")
            readURL(this);
        else
            alert("Please select image file (jpg, jpeg, png).")
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
                console.log(input.files[0]);
            };
//                $("#remove").val(0);
        }
    }
    function removeImage() {
        $('#preview').attr('src', 'noimage.jpg');
//            $("#remove").val(1);
    }

    $('#upload').change(function(){
      if($(this).val() != ''){
        upload(this);
      }
    });

    function upload(img) {
      var form_data = new FormData();
      form_data.append('thumbnail', img.files[0])
    }

</script>


@endsection
