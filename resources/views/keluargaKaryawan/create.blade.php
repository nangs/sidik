@extends('app')

@section('content')

	<h1>Tambah Keluarga Karyawan</h1>
	<hr />

	@include('keluargaKaryawan/_form', ['method' => 'POST', 'url' => 'keluargaKaryawan'])

@stop