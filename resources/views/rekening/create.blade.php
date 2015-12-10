@extends('psb')

@section('content')

	<h1>Tambah Rekening</h1>
	<hr />

	@include('rekening/_form', ['method' => 'POST', 'url' => 'rekening'])

@stop