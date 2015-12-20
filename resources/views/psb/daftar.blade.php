@extends('psb')

@section('content')

	<h1>Daftar Calon Santri Baru</h1>
	<hr />

	@include('_error1')
	@include('psb/_formDaftar', ['method' => 'POST', 'url' => '/psb'])

@stop
