@extends('psb')

@section('content')

	<h1>Update Rekening</h1>
	<hr />

	@include('rekening/_form', ['method' => 'PATCH', 'url' => 'rekening/'.$rekening->id])

@stop