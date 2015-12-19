@extends('print')

@section('content')

	<h1 class="text-center">PSB MIAS TA 2016/2017</h1>
	<hr />

	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA PSB</h3>
		</div>
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th style="width:200px;">Nomor Pendaftaran</th>
					<th>: PSB-{{\App\Psb::jenjangList($psb->jenjang)}}-{{App\Ta::active()->first()->periode}}-{{$psb->calonSiswa->id}}</th>
				</tr>
				<tr>
					<th style="width:170px;">Nama Lengkap</th>
					<th>: {{strtoupper($psb->calonSiswa->nama)}}</th>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>: {{$psb->calonSiswa->jenis_kelamin ? 'Laki - Laki' : 'Perempuan'}}</td>
				</tr>
				<tr>
					<th>Tahun Ajaran</th>
					<td>: {{$psb->tahun_ajaran}}</td>
				</tr>
				<tr>
					<th>Jenjang / Tingkat</th>
					<td>: {{\App\Psb::jenjangList($psb->jenjang)}} / {{\App\Psb::tingkatList($psb->tingkat)}}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA CALON SISWA</h3>
		</div>
		@include('psb._calonSiswa', ['calonSiswa' => $psb->calonSiswa])
	</div>

	@if ($psb->calonSiswa->asalSekolah)
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA ASAL SEKOLAH</h3>
		</div>
		@include('psb._asalSekolah', ['asalSekolah' => $psb->calonSiswa->asalSekolah])
	</div>
	@endif

	@if ($psb->calonSiswa->prestasi->count())
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA PRESTASI CALON SISWA</h3>
		</div>
		@include('psb._prestasi', ['prestasi' => $psb->calonSiswa->prestasi])
	</div>
	@endif

	@if ($psb->calonSiswa->beasiswa->count())
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA BEASISWA CALON SISWA</h3>
		</div>
		@include('psb._beasiswa', ['beasiswa' => $psb->calonSiswa->beasiswa])
	</div>
	@endif

	@if ($ayah = $psb->calonSiswa->ortu()->ayah()->first())
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA AYAH CALON SISWA</h3>
		</div>
		@include('psb._ortu', ['ortu' => $ayah])
	</div>
	@endif

	@if ($ibu = $psb->calonSiswa->ortu()->ibu()->first())
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA IBU CALON SISWA</h3>
		</div>
		@include('psb._ortu', ['ortu' => $ibu])
	</div>
	@endif

	@if ($wali = $psb->calonSiswa->ortu()->wali()->first())
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA WALI CALON SISWA</h3>
		</div>
		@include('psb._ortu', ['ortu' => $wali])
	</div>
	@endif

	@if ($psb->calonSiswa->alamat)
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">DATA ALAMAT CALON SISWA</h3>
		</div>
		@include('psb._alamatCalonSiswa', ['alamat' => $psb->calonSiswa->alamat])
	</div>
	@endif


@stop
