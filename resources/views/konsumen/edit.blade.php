@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data konsumen</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data konsumen
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('konsumen.update', $konsumen->id)}}" method="post">
		<Input type="hidden" name="_method" value="PUT">
		<Input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
		<label class="control-lable">Nama konsumen</label>
		<input type="text" name="a" class="form-control" required="" value="{{$konsumen->nama}}">
		</div>

		<div class="form-group">
		<label class="control-lable">jenis kelamin</label>
		<input type="text" name="b" class="form-control" required="" value="{{$konsumen->jk}}">
		</div>

		<div class="form-group">
		<label class="control-lable">no hp</label>
		<input type="text" name="c" class="form-control" required="" value="{{$konsumen->no_hp}}">
		</div>

		<div class="form-group">
		<label class="control-lable">no identitas</label>
		<input type="text" name="d" class="form-control" required="" value="{{$konsumen->no_identitas}}">
		</div>

		<div class="form-group">
		<label class="control-lable">Alamat</label>
		<textarea name="e" class="form-control" rows="10" required="">{{$konsumen->alamat}}</textarea>
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection