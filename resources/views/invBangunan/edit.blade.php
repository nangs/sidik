@extends('app')

@section('content')

	<h1>Update Inventaris Bangunan : {{ $invBangunan->nama }}</h1>
	<hr />

	@include('invBangunan/_form', ['method' => 'PATCH', 'url' => 'invBangunan/'.$invBangunan->id])

@stop