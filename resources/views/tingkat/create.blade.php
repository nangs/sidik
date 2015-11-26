@extends('app')

@section('content')

	<h1>Tambah Tingkat</h1>
	<hr />

	@include('tingkat/_form', ['method' => 'POST', 'url' => 'tingkat'])

@stop