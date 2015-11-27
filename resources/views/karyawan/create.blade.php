@extends('app')

@section('content')

	<h1>Tambah Guru/Karyawan</h1>
	<hr />

	@include('karyawan/_form', ['method' => 'POST', 'url' => 'karyawan'])

@stop