@extends('app')

@section('content')

	<h1>Update Karyawan : {{ $karyawan->nama }}</h1>
	<hr />

	@include('karyawan/_form', ['method' => 'PATCH', 'url' => 'karyawan/'.$karyawan->id])

@stop