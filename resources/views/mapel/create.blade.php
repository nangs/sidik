@extends('app')

@section('content')

	<h1>Tambah Mata Pelajaran</h1>
	<hr />

	@include('mapel/_form', ['method' => 'POST', 'url' => 'mapel'])

@stop