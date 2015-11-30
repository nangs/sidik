@extends('app')

@section('content')

	<h1>Update Bagian : {{ $bagian->nama }}</h1>
	<hr />

	@include('bagian/_form', ['method' => 'PATCH', 'url' => 'bagian/'.$bagian->id])

@stop