@extends('app')

@section('content')

	<h1>Tambah Tahun Ajaran</h1>
	<hr />

	@include('ta/_form', ['method' => 'POST', 'url' => 'ta'])

@stop