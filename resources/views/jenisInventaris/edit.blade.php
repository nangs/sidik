@extends('app')

@section('content')

	<h1>Update Jenis Inventaris : {{ $jenisInventaris->nama }}</h1>
	<hr />

	@include('jenisInventaris/_form', ['method' => 'PATCH', 'url' => 'jenisInventaris/'.$jenisInventaris->id])

@stop