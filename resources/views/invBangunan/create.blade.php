@extends('app')

@section('content')

	<h1>Tambah Inventaris Bangunan</h1>
	<hr />

	@include('invBangunan/_form', ['method' => 'POST', 'url' => 'invBangunan'])

@stop