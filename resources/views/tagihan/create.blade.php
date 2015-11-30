@extends('app')

@section('content')

	<h1>Tambah Tagihan</h1>
	<hr />

	@include('tagihan/_form', ['method' => 'POST', 'url' => 'tagihan'])

@stop