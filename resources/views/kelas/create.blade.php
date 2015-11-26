@extends('app')

@section('content')

	<h1>Tambah Kelas</h1>
	<hr />

	@include('kelas/_form', ['method' => 'POST', 'url' => 'kelas'])

@stop