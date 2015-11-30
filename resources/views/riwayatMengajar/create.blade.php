@extends('app')

@section('content')

	<h1>Tambah Riwayat Mengajar</h1>
	<hr />

	@include('riwayatMengajar/_form', ['method' => 'POST', 'url' => 'riwayatMengajar'])

@stop