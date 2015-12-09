@extends('blank')

@section('content')

	<h1 class="text-center text-uppercase">FORMULIR PENDAFTARAN SISWA BARU</h1>
	<h2 class="text-center"><span class="label label-danger">Nomor Pendaftaran : 112</span></h2>
	<hr />

	@include('psb/_form', ['method' => 'POST', 'url' => 'psb'])

	<br />

@stop