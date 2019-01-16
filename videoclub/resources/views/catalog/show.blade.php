<!DOCTYPE html>
<html>
<head>
	<title>Videoclub</title>
</head>
<body>
	@extends('layouts.master')
	@section('content')
		<div class="row">
			<div class="col-sm-4">
				<img src="{{$arrayPeliculas['poster']}}" width="100%" />
			</div>
			<div class="col-sm-8">
				<h3>{{$arrayPeliculas['title']}}</h3>
				<h5>Año: {{$arrayPeliculas['year']}}</h5>
				<h5>Director: {{$arrayPeliculas['director']}}</h5>
				<p><b>Resumen:</b> {{$arrayPeliculas['synopsis']}}</p>
				<p>
					<b>Estado: </b>
					@if($arrayPeliculas['rented'] == false)
					Película disponible.
					@else
					Película actualmente alquilada.
					@endif
				</p>
				@if($arrayPeliculas['rented'] == false)
				<button type="button" class="btn btn-primary">Alquilar pelicula</button>
				@else
				<button type="button" class="btn btn-danger">Devolver pelicula</button>
				@endif
				<a href="{{ url('/catalog/edit/' . $id_pelicula ) }}" class="btn btn-warning">Editar pelicula</a>
				<a href="{{ url('/catalog' ) }}" class="btn btn-light">Volver al listado</a>
			</div>
		</div>
	@stop
</body>
</html>