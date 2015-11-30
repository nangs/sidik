@extends('app')

@section('content')

	<h1>Tambah Inventaris Tanah</h1>
	<hr />

	@include('invTanah/_form', ['method' => 'POST', 'url' => 'invTanah'])

@stop