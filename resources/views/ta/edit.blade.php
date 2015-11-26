@extends('app')

@section('content')

	<h1>Update Tahun Ajaran Periode : {{ $ta->periode }}</h1>
	<hr />

	@include('ta/_form', ['method' => 'PATCH', 'url' => 'ta/'.$ta->id])

@stop