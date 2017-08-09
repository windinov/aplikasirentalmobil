@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data mobil</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data mobil
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('mobil.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
		<label class="control-lable">Foto</label>
		<input type="file" name="foto" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Merk</label>
		<input type="text" name="Merk" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Palt no</label>
		<input type="text" name="Palt_no" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Spesifikasi</label>
		<input type="text" name="Spesifikasi" class="form-control" required="">
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