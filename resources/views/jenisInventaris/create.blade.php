@extends('app')

@section('content')

	<h1>Tambah Jenis Inventaris</h1>
	<hr />

	@include('jenisInventaris/_form', ['method' => 'POST', 'url' => 'jenisInventaris'])

@stop