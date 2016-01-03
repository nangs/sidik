@extends('psb')

@section('content')

	<h1>Tambah Pertanyaan Wawancara</h1>
	<hr />

	@include('formWawancaraOrangtuaCalonSantri/_form', ['method' => 'POST', 'url' => 'form-wawancara-orangtua'])

@stop
