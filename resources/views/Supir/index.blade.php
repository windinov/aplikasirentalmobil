@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data Supir</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data supir
	<div class="panel-title pull-right"><a href="{{ url('supir/create')}}">Tambah Data</a></div>
	</div>
<div class="panel-body">
	<table class="table">
	<thead>
		<tr>
			<th>foto</th>
			<th>nama</th>
			<th>jenis kelamin</th>
			<th>no identitas</th>
			<th>alamat</th>
			<th>no hp</th>
			<th>harga sewa</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($Supir as $data)
	<tr>
	<td><img src="{{asset('/img/'.$data->foto. '')}}" width="70" height="70"></td>
    <td>{{$data->nama}}</td>
	<td>{{$data->jk}}</td>
	<td>{{$data->no_identitas}}</td>
	<td>{{$data->alamat}}</td>
	<td>{{$data->no_hp}}</td>
	<td>{{$data->harga_sewa}}</td>
	
	</td>
	   <td>
	   <a class="btn btn-warning" href="/supir/{{$data->id}}/edit">Edit</a>
	   </td>
	   <td>
	   <a class="btn btn-primary" href="/supir/{{$data->id}}">Show</a>
	   </td>
	   <td>
	  <form action="{{route('supir.destroy',$data->id)}}" method="post">
	   
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