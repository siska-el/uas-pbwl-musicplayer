@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: dimgray;
			font-family: 'Josefin Sans';
			font-size: 40px;
		}
		
		.btn {
			color: dimgray;
		}

		label {
			font-family: 'Josefin Sans'; 
			color: dimgray;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Input Data Played</h2>
			<form method="post" action="{{url('/played')}}">
			@csrf
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Pilih Tracks</label>:
					<div class="col-sm-5">
							<select name="tracks_id" class="form-control" style="background-color: #FFB6C1; color: white">
							<option value="" holder>-- Pilih --</option>
							@foreach($tracks as $row)
							<option value="{{$row->id}}">{{$row->tracks_name}} - {{ $row->album->artist->artist_name}}</option>
							@endforeach
							</select>
					</div>
					</div>
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: #FFB6C1 " >SIMPAN</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


@endsection