@extends('app')

@section('content')

	<h1>Tambah Jenjang</h1>
	<hr />

	@include('jenjang/_form', ['method' => 'POST', 'url' => 'jenjang'])

@stop