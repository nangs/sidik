@extends('app')

@section('content')

	<h1>Update Keluarga Karyawan</h1>
	<hr />

	@include('keluargaKaryawan/_form', ['method' => 'PATCH', 'url' => 'keluargaKaryawan/'.$keluargaKaryawan->id])

@stop