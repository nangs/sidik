@extends('app')

@section('content')

	<h1>Tambah Ruangan</h1>
	<hr />

	@include('ruangan/_form', ['method' => 'POST', 'url' => 'ruangan'])

@stop