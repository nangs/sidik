@extends('psb')

@section('content')

	@include('_step', ['step' => 1])

	<hr />

	@include('_error1')

	@include('psb/_formStep1', ['method' => 'POST', 'url' => '/psb/step1'])

@stop