@extends('app')

@section('content')

	<h1>Update Tingkat : {{ $tingkat->nama }}</h1>
	<hr />

	@include('tingkat/_form', ['method' => 'PATCH', 'url' => 'tingkat/'.$tingkat->id])

@stop