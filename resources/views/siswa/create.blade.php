@extends('app')

@section('content')

	<h1>Tambah Siswa</h1>
	<hr />

	@include('siswa/_form', ['method' => 'POST', 'url' => 'siswa'])

@stop