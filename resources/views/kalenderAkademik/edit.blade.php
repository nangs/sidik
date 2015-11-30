@extends('app')

@section('content')

	<h1>Update Kalender Akademik</h1>
	<hr />

	@include('kalenderAkademik/_form', ['method' => 'PATCH', 'url' => 'kalenderAkademik/'.$kalenderAkademik->id])

@stop