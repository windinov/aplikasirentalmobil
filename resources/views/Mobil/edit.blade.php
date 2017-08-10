@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data mobil</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data mobil
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('mobil.update', $mobil->id)}}" method="post" enctype="multipart/form-data">
		<Input type="hidden" name="_method" value="PUT">
		<Input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
		<label class="control-lable">foto</label>
		<input type="file" name="foto" class="form-control" required="" value="{{$mobil->foto}}">
		</div>

		<div class="form-group">
		<label class="control-lable">merk</label>
		<input type="text" name="merk" class="form-control" required="" value="{{$mobil->merk}}">
		</div>

		<div class="form-group">
		<label class="control-lable">palt no</label>
		<input type="text" name="palt_no" class="form-control" required="" value="{{$mobil->palt_no}}">
		</div>

		<div class="form-group">
		<label class="control-lable">spesifikasi</label>
		<input type="text" name="spesifikasi" class="form-control" required="" value="{{$mobil->spesifikasi}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Harga sewa</label>
		<input type="text" name="Harga_sewa" class="form-control" required="" value="{{$mobil->harga_sewa}}">
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection