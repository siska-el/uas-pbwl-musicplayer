@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">
		h2	{
			margin-bottom: 20px;
			margin-top: 15px;
			color: dimgray;
			font-family: 'Josefin Sans';
			font-size: 35px;
			
		}

		table th {
			color: dimgray;
			font-family: century gothic;
		}

		table {
			margin-top: 10px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container">
	<h2>Data Album</h2>
	<a  href="{{ url('album/create') }}" class="btn btn-success bg-info">+ Tambah Data</a>
	<table class="table">
		<thead class="bg-light">
		<tr style="background-color:#FFC0CB 	">
			<th scope="col">NO</th>
			<th scope="col">NAMA</th>
			<th scope="col">ARTIST</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr style="background-color: #fFF5EE; color: indianred">
			<td>{{ $row->id }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->artist->artist_name }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-secondary">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-secondary">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	
</div>
</body>
</html>


@endsection