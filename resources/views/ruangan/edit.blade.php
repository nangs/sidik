@extends('app')

@section('content')

	<h1>Update Ruangan : {{ $ruangan->nama }}</h1>
	<hr />

	@include('ruangan/_form', ['method' => 'PATCH', 'url' => 'ruangan/'.$ruangan->id])

@stop