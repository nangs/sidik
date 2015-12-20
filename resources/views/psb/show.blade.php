@extends('psb')

@section('content')

	<a href="/psb/edit/{{ $psb->id }}" class="btn btn-success pull-right"> <span class="fa fa-edit"></span> Edit Data PSB</a>

	<h1>Detail Calon Siswa : {{ $psb->calonSiswa->nama }}</h1>
	<hr />

	@include('psb._show')

@stop
