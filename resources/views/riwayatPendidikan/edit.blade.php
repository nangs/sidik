@extends('app')

@section('content')

	<h1>Update Riwayat Pendidikan</h1>
	<hr />

	@include('riwayatPendidikan/_form', ['method' => 'PATCH', 'url' => 'riwayatPendidikan/'.$riwayatPendidikan->id])

@stop