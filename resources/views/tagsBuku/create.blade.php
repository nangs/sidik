@extends('app')

@section('content')

	<h1>Tambah Tags Buku</h1>
	<hr />

	@include('tagsBuku/_form', ['method' => 'POST', 'url' => 'tagsBuku'])

@stop