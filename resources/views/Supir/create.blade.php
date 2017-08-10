@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data supir</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data supir
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('supir.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
		<label class="control-lable">Foto</label>
		<input type="file" name="foto" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">nama</label>
		<input type="text" name="nama" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">jenis kelamin</label>
		<input type="text" name="jk" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">No identitas</label>
		<input type="text" name="no_identitas" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="alamat" class="form-control" rows="10" required=""></textarea>
		</div>

		<div class="form-group">
		<label class="control-lable">No hp</label>
		<input type="text" name="no_hp" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Harga sewa</label>
		<input type="text" name="Harga_sewa" class="form-control" required="">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection