@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data supir</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data supir
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('supir.update', $supir->id)}}" method="post" enctype="multipart/form-data">
		<Input type="hidden" name="_method" value="PUT">
		<Input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
		<label class="control-lable">foto</label>
		<input type="file" name="foto" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Nama supir</label>
		<input type="text" name="nama" class="form-control" required="" value="{{$supir->nama}}">
		</div>

		<div class="form-group">
		<label class="control-lable">jenis kelamin</label>
		<input type="text" name="jk" class="form-control" required="" value="{{$supir->jk}}">
		</div>

		<div class="form-group">
		<label class="control-lable">no identitas</label>
		<input type="text" name="no_identitas" class="form-control" required="" value="{{$supir->no_identitas}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="alamat" class="form-control" rows="10" required="">{{$supir->alamat}}</textarea>
		</div>

		<div class="form-group">
		<label class="control-lable">no hp</label>
		<input type="text" name="no_hp" class="form-control" required="" value="{{$supir->no_hp}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Harga sewa</label>
		<input type="text" name="Harga_sewa" class="form-control" required="" value="{{$supir->harga_sewa}}">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection