@extends('app')

@section('content')
	
	<a href="/karyawan/{{ $karyawan->id }}/edit" class="btn btn-success pull-right">Edit Data Karyawan</a>

	<h1>Detail Karyawan : {{ $karyawan->nama }}</h1>
	<hr />

	<div class="row">

		<div class="col-md-3">
			
			<img src="/uploads/{{ $karyawan->foto }}" class="img img-thumbnail" />

		</div>

		<div class="col-md-9">
			
			@include('karyawan._dataPribadi')

		</div>

	</div>

	<br />

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Riwayat Pendidikan</a></li>
		<li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Riwayat Kepegawaian</a></li>
		<li role="presentation"><a href="#5" aria-controls="5" role="tab" data-toggle="tab">Mata Pelajaran Yang Diampu</a></li>
		<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Keluarga</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">

		

		<div role="tabpanel" class="tab-pane active" id="3">
			<br />
			@include('riwayatPendidikan._index')
		</div>

		<div role="tabpanel" class="tab-pane" id="4">
			<br />
			@include('riwayatKepegawaian._index')
		</div>

		<div role="tabpanel" class="tab-pane" id="5">
			<br />
			@include('karyawan._mapelDiampu')
		</div>

		<div role="tabpanel" class="tab-pane" id="2">
			<br />
			@include('keluargaKaryawan._index')
		</div>

	</div>

@stop