@extends('app')

@section('content')

	<h1>Update Jenis Ujian : {{ $jenisUjian->nama }}</h1>
	<hr />

	@include('jenisUjian/_form', ['method' => 'PATCH', 'url' => 'jenisUjian/'.$jenisUjian->id])

@stop