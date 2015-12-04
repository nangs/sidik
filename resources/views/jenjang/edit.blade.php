@extends('app')

@section('content')

	<h1>Update Jenjang : {{ $jenjang->nama }}</h1>
	<hr />

	@include('jenjang/_form', ['method' => 'PATCH', 'url' => 'jenjang/'.$jenjang->id])

@stop