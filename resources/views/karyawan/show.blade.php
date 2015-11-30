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
		<li role="presentation" class="active"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Rwyt. Pend. Formal</a></li>
		<li role="presentation"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Rwyt. Pend. Informal</a></li>
		<li role="presentation"><a href="#6" aria-controls="6" role="tab" data-toggle="tab">Rwyt. Mengajar</a></li>
		<li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Rwyt. Kepegawaian</a></li>
		<li role="presentation"><a href="#7" aria-controls="7" role="tab" data-toggle="tab">Pengalaman Kerja</a></li>
		<li role="presentation"><a href="#5" aria-controls="5" role="tab" data-toggle="tab">Jadwal Mengajar</a></li>
		<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Keluarga</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">

		

		<div role="tabpanel" class="tab-pane active" id="3">
			<br />
			<a href="/riwayatPendidikan/create?karyawan_id={{ $karyawan->id }}&formal=1" class="btn btn-success">Tambah Riwayat Pendidikan Formal</a>
			<br />
			<br />
			@include('riwayatPendidikan._indexFormal')
		</div>

		<div role="tabpanel" class="tab-pane" id="1">
			<br />
			<a href="/riwayatPendidikan/create?karyawan_id={{ $karyawan->id }}&formal=0" class="btn btn-success">Tambah Riwayat Pendidikan Informal</a>
			<br />
			<br />
			@include('riwayatPendidikan._indexInformal')
		</div>

		<div role="tabpanel" class="tab-pane" id="4">
			<br />
			@include('riwayatKepegawaian._index')
		</div>

		<div role="tabpanel" class="tab-pane" id="7">
			<br />
			@include('pengalamanKerja._index')
		</div>

		<div role="tabpanel" class="tab-pane" id="6">
			<br />
			@include('riwayatMengajar._index')
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