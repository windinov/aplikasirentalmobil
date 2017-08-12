@extends('layouts.app')
@section('content')
<div class="container">
	<center><h1>Data Mobil</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data mobil
	<div class="panel-title pull-right"><a href="{{ url('mobil/create') }}">Tambah Data</a></div>
	</div>
<div class="panel-body">
	<table class="table">
	<thead>
		<tr>
			<th>foto</th>
			<th>merk</th>
			<th>palt no</th>
			<th>spesifikasi</th>
			<th>harga sewa</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($mobil as $data)
	<tr>
	<td><img src="{{asset('/img/'.$data->foto. '')}}" width="70" height="70"></td>
    <td>{{$data->merk}}</td>
	<td>{{$data->palt_no}}</td>
	<td>{{$data->spesifikasi}}</td>
	<td>{{$data->harga_sewa}}</td>	
	</td>

	   <td>
	   <a class="btn btn-warning" href="/mobil/{{$data->id}}/edit">Edit</a>
	   </td>
	   <td>
	   <a class="btn btn-primary" href="/mobil/{{$data->id}}">Show</a>
	   </td>
	   <td>
	   <form action="{{route('mobil.destroy',$data->id)}}" method="post">
	   
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