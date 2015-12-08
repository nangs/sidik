@extends('app')

@section('content')
	
	<a href="/siswa/{{ $siswa->id }}" class="btn btn-success pull-right">Lihat Data Siswa</a>

	<h1>Update Siswa : {{ $siswa->nama }}</h1>
	<hr />

	@include('siswa/_form', ['method' => 'PATCH', 'url' => 'siswa/'.$siswa->id])

@stop