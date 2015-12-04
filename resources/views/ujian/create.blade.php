@extends('app')

@section('content')

	<h1>Tambah Jadwal Ujian</h1>
	<hr />

	@include('ujian/_form', ['method' => 'POST', 'url' => 'ta'])

@stop