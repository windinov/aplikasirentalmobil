@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data sewa</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data sewa
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
	</div>

<div class="panel-body">
	<form action="{{route('sewa.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group">
		<label class="control-lable">tanggal sewa</label>
		<input type="date" name="tgl_sewa" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">jumlah hari</label>
		<input type="number" name="jmlh_hari" class="form-control" required="">
		</div>

		<div class="form-group">
		<label class="control-lable">konsumen id</label>
		<select class="form-control" name="id_konsumen">
			@foreach($konsumen as $data)
			<option value="{{$data->id}}">{{$data->id}}</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<label class="control-lable">id mobil</label>
		<select class="form-control" name="mobil_id">
			@foreach($mobil as $data)
			<option value="{{$data->id}}">{{$data->merk}}</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<label class="control-lable">Nama supir</label>
		<select class="form-control" name="id_supir">
		<option value="0">Tidak menyewa supir</option>
			@foreach($supir as $data)
			<option value="{{$data->id}}">{{$data->nama}}</option>
			@endforeach
		</select>
		</div>

		<div class="form-group">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div>
</form>
</div>
</div>
@endsection