@extends('app')

@section('content')

	<h1>Tambah Jabatan</h1>
	<hr />

	@include('jabatan/_form', ['method' => 'POST', 'url' => 'jabatan'])

@stop