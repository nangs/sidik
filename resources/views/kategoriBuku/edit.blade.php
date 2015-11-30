@extends('app')

@section('content')

	<h1>Update Kategori Buku : {{ $kategoriBuku->nama }}</h1>
	<hr />

	@include('kategoriBuku/_form', ['method' => 'PATCH', 'url' => 'kategoriBuku/'.$kategoriBuku->id])

@stop