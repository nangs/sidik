@extends('app')

@section('content')

	<h1>Update Tags Buku : {{ $tagsBuku->nama }}</h1>
	<hr />

	@include('tagsBuku/_form', ['method' => 'PATCH', 'url' => 'tagsBuku/'.$tagsBuku->id])

@stop