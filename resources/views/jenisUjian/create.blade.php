@extends('app')

@section('content')

	<h1>Tambah Jenis Ujian</h1>
	<hr />

	@include('jenisUjian/_form', ['method' => 'POST', 'url' => 'jenisUjian'])

@stop