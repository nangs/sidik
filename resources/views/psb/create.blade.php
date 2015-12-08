@extends('blank')

@section('content')

	<h1>Isi Formulir</h1>
	<hr />

	@include('psb/_form', ['method' => 'POST', 'url' => 'psb'])

@stop