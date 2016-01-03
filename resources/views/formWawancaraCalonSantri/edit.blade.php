@extends('psb')

@section('content')

	<h1>Update Pertanyaan Wawancara</h1>
	<hr />

	@include('formWawancaraCalonSantri/_form', ['method' => 'PATCH', 'url' => 'form-wawancara-calon-santri/'.$formWawancaraCalonSantri->id])

@stop
