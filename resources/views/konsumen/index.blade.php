@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data Konsumen</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data konsumen
	<div class="panel-title pull-right"><a href="{{ route('konsumen.create') }}">Tambah Data</a></div>
	</div>
<div class="panel-body">
	<table class="table">
	<thead>
		<tr>
			<th>Nama konsumen</th>
			<th>Jenis kelamin</th>
			<th>No hp</th>
			<th>No identitas</th>
			<th>Alamat</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($konsumen as $data)
	<tr>
	<td>{{$data->nama}}</td>
    <td>{{$data->jk}}</td>
	<td>{{$data->no_hp}}</td>
	<td>{{$data->no_identitas}}</td>
	<td>{{$data->alamat}}</td>
	
	</td>
	   
	   <td>
	   <a class="btn btn-warning" href="/konsumen/{{$data->id}}/edit">Edit</a>
	   </td>
	   <td>
	   <a class="btn btn-primary" href="/konsumen/{{$data->id}}">Show</a>
	   </td>
	   <td>
	   <form action="{{route('konsumen.destroy',$data->id)}}" method="post">

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