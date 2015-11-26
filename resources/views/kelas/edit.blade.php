@extends('app')

@section('content')

	<h1>Update Kelas : {{ $kelas->nama }}</h1>
	<hr />

	@include('kelas/_form', ['method' => 'PATCH', 'url' => 'kelas/'.$kelas->id])

@stop