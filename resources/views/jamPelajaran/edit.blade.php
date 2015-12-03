@extends('app')

@section('content')

	<h1>Update Jam Pelajaran</h1>
	<hr />

	@include('jamPelajaran/_form', ['method' => 'PATCH', 'url' => 'jamPelajaran/'.$jamPelajaran->id])

@stop