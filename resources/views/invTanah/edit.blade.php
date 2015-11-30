@extends('app')

@section('content')

	<h1>Update Inventaris Tanah : {{ $invTanah->nama }}</h1>
	<hr />

	@include('invTanah/_form', ['method' => 'PATCH', 'url' => 'invTanah/'.$invTanah->id])

@stop