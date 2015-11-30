@extends('app')

@section('content')

	<h1>Update Pengalaman Kerja</h1>
	<hr />

	@include('pengalamanKerja/_form', ['method' => 'PATCH', 'url' => 'pengalamanKerja/'.$pengalamanKerja->id])

@stop