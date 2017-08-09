@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data konsumen</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data konsumen
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('konsumen.store')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
		<label class="control-lable">Nama konsumen</label>
		<input type="text" name="a" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Jenis kelamin</label>
		<input type="text" name="b" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">No hp</label>
		<input type="text" name="c" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">No identitas</label>
		<input type="text" name="d" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="e" class="form-control" rows="10" required=""></textarea>
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection