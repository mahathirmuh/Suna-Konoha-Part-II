<div class="form-group">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
</div>
<div class="form-group">
	<label class="col-sm-2">Nama</label>
	<div class="col-sm-9">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2">No Telp</label>
	<div class="col-sm-9">
		{!! Form::text('notlp',null,['class'=>'form-control','placeholder'=>"No Telepon"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2">Email</label>
	<div class="col-sm-9">
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"E-Mail"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2">Alamat</label>
	<div class="col-sm-9">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
</div>
