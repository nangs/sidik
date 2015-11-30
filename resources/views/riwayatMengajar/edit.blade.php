@extends('app')

@section('content')

	<h1>Update Riwayat Mengajar</h1>
	<hr />

	@include('riwayatMengajar/_form', ['method' => 'PATCH', 'url' => 'riwayatMengajar/'.$riwayatMengajar->id])

@stop