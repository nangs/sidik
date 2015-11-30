@extends('app')

@section('content')

	<h1>Update Tagihan : {{ $tagihan->nomor }}</h1>
	<hr />

	@include('tagihan/_form', ['method' => 'PATCH', 'url' => 'tagihan/'.$tagihan->id])

@stop