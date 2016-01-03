@extends('psb')

@section('content')

	<h1>Update Pertanyaan Wawancara</h1>
	<hr />

	@include('formWawancaraOrangtuaCalonSantri/_form', ['method' => 'PATCH', 'url' => 'form-wawancara-oangtua/'.$formWawancaraOrangtuaCalonSantri->id])

@stop
