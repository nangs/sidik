@extends('app')

@section('content')

	<h1>Update Mata Pelajaran : {{ $mapel->nama }}</h1>
	<hr />

	@include('mapel/_form', ['method' => 'PATCH', 'url' => 'mapel/'.$mapel->id])

@stop