@extends('app')

@section('content')

	<h1>Tambah Kategori Buku</h1>
	<hr />

	@include('kategoriBuku/_form', ['method' => 'POST', 'url' => 'kategoriBuku'])

@stop