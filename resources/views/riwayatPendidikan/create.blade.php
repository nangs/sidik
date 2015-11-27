@extends('app')

@section('content')

	<h1>Tambah Riwayat Pendidikan</h1>
	<hr />

	@include('riwayatPendidikan/_form', ['method' => 'POST', 'url' => 'riwayatPendidikan'])

@stop