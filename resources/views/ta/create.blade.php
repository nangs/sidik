@extends('psb')

@section('content')

	<h1>Tambah Tahun Ajaran</h1>
	<hr />
	@include('_error')
	@include('ta/_form', ['method' => 'POST', 'url' => 'tahun-ajaran'])

@stop
