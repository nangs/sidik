@extends('psb')

@section('content')

	<div class="pull-right">
		<a href="/psb/isiFormulir/{{ $psb->id }}" class="btn btn-success"><span class="fa fa-edit"></span> Isi Formulir</a>
		<a href="/psb/edit/{{ $psb->id }}" class="btn btn-success"><span class="fa fa-edit"></span> Edit Data PSB</a>
	</div>

	<h1>Detail Data PSB : {{ $psb->calonSiswa->nama }}</h1>
	<hr />

	@include('psb._show')

@stop
