@extends('psb')

@section('content')

	<h1>Tambah Pertanyaan Wawancara</h1>
	<hr />

	@include('formWawancaraCalonSantri/_form', ['method' => 'POST', 'url' => 'form-wawancara-calon-santri'])

@stop
