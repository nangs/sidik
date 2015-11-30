@extends('app')

@section('content')

	<h1>Tambah Pengalaman Kerja</h1>
	<hr />

	@include('pengalamanKerja/_form', ['method' => 'POST', 'url' => 'pengalamanKerja'])

@stop