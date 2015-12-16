@extends('psb')

@section('content')
	
	<!-- <a href="/siswa/{{ $psb->calonSiswa->id }}/edit" class="btn btn-success pull-right">Edit Data Siswa</a> -->

	<h1>Detail Calon Siswa : {{ $psb->calonSiswa->nama }}</h1>
	<hr />

	@include('psb._show')
	
@stop