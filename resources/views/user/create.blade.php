@extends('psb')

@section('content')

	<h1>Tambah User</h1>
	<hr />

	@include('_error1')
	@include('user/_form', ['method' => 'POST', 'url' => 'user'])

@stop