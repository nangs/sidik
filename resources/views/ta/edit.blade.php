@extends('psb')

@section('content')

	<h1>Update Tahun Ajaran Periode : {{ $ta->periode }}</h1>
	<hr />
	@include('_error')
	@include('ta/_form', ['method' => 'PATCH', 'url' => 'tahun-ajaran/'.$ta->id])

@stop
