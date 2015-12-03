@extends('app')

@section('content')

	<h1>Tambah Jam Pelajaran</h1>
	<hr />

	@include('jamPelajaran/_form', ['method' => 'POST', 'url' => 'jamPelajaran'])

@stop