@extends('psb')

@section('content')

	<h1>Isi Formulir PSB : {{$psb->calonSiswa->nama}}</h1>
	<hr />

	@include('_error1')
	@include('psb/_formEdit', ['method' => 'PUT', 'url' => '/psb/isi-formulir/'.$psb->id])

@stop
