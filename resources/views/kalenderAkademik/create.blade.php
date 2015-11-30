@extends('app')

@section('content')

	<h1>Tambah Kalender Akademik</h1>
	<hr />

	@include('kalenderAkademik/_form', ['method' => 'POST', 'url' => 'kalenderAkademik'])

@stop