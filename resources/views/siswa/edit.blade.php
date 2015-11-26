@extends('app')

@section('content')

	<h1>Update Siswa : {{ $siswa->nama }}</h1>
	<hr />

	@include('siswa/_form', ['method' => 'PATCH', 'url' => 'siswa/'.$siswa->id])

@stop