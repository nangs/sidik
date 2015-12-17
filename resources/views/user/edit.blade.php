@extends('psb')

@section('content')

	<h1>Update User : {{ $user->name }}</h1>
	<hr />

	@include('user/_form', ['method' => 'PATCH', 'url' => 'user/'.$user->id])

@stop