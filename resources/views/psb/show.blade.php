@extends('psb')

@section('content')

	@if (Auth::user()->role == 'data' || Auth::user()->role == 'admin' || Auth::user()->role == 'pendaftaran')
	<div class="pull-right">
		@if (Auth::user()->role == 'pendaftaran' && $psb->status_progress < \App\Psb::STATUS_ISI_FORM)
		<a href="/psb/editFormDaftar/{{ $psb->id }}" class="btn btn-success"><span class="fa fa-edit"></span> Edit Data PSB</a>
		@endif
		@if ($psb->status_progress == \App\Psb::STATUS_BAYAR_OK)
		<a href="/psb/isiFormulir/{{ $psb->id }}" class="btn btn-success"><span class="fa fa-edit"></span> Isi Formulir</a>
		@endif
		@if ($psb->status_progress >= \App\Psb::STATUS_ISI_FORM)
		<a href="/psb/edit/{{ $psb->id }}" class="btn btn-success"><span class="fa fa-edit"></span> Edit Formulir PSB</a>
		@endif
	</div>
	@endif

	<h1>Detail Data PSB : {{ $psb->calonSiswa->nama }}</h1>
	<hr />

	@include('psb._show')

@stop
