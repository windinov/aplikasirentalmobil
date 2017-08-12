@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data sewa</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data sewa
	<div class="panel-title pull-right"><a href="{{ url('sewa/create') }}">Tambah Data</a></div>
	</div>
<div class="panel-body">
	<table class="table">
	<thead>
		<tr>
			<th>Tanggal Sewa</th>
			<th>Jumlah Hari</th>
			<th>Id Konsumen</th>
			<th>Nama konsumen</th>
			<th>No identitas</th>
			<th>merk mobil</th>
			<th>harga sewa</th>
			<th>nama supir</th>
			<th>harga sewa</th>
			<th>Total Sewa</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
	@php $no1 @endphp
	@foreach($sewa as $data)
	<tr>
	<td>{{$data->tgl_sewa}}</td>
	<td>{{$data->konsumen->id}}</td>
    <td>{{$data->jmlh_hari}}</td>
	<td>{{$data->konsumen->nama}}</td>
	<td>{{$data->konsumen->no_identitas}}</td>
	<td>{{$data->mobil->merk}}</td>
	<td>{{$data->mobil->harga_sewa}}</td>
	<td>{{$data->supir->nama}}</td>
	<td>{{$data->total_sewa}}</td>
	
	</td>
	   
	   <td>
	   <a class="btn btn-warning" href="/sewa/{{$data->id}}/edit">Edit</a>
	   </td>
	   <td>
	   <a class="btn btn-primary" href="/sewa/{{$data->id}}">Show</a>
	   </td>
	   <td>
	   <form action="{{route('sewa.destroy',$data->id)}}" method="post">

	   <input type="hidden" name="_method" value="DELETE">
	   <input type="hidden" name="_token">
	   <input type="submit" value="DELETE" class="btn btn-danger">
	   {{csrf_field()}}
	   </form>
	   </td>
	   </tr>
	   @endforeach
	   </tbody>
	   </table>
	   </div>
</div>
</div>
@endsection