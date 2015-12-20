@extends('psb')

@section('content')

	<h1>Edit Data PSB</h1>
	<hr />

	@include('_error1')
	@include('psb/_formEdit', ['method' => 'POST', 'url' => '/psb'])

@stop
