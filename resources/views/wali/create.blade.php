@extends('app')

@section('content')

	<h1>Tambah Wali Siswa</h1>
	<hr />

	@include('wali/_form', ['method' => 'POST', 'url' => 'wali'])

@stop