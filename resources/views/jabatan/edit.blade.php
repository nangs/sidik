@extends('app')

@section('content')

	<h1>Update Jabatan : {{ $jabatan->nama }}</h1>
	<hr />

	@include('jabatan/_form', ['method' => 'PATCH', 'url' => 'jabatan/'.$jabatan->id])

@stop