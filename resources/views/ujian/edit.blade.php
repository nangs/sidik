@extends('app')

@section('content')

	<h1>Update Jadwal Ujian</h1>
	<hr />

	@include('ujian/_form', ['method' => 'PATCH', 'url' => 'ta/'.$ta->id])

@stop