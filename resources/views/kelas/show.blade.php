@extends('app')

@section('content')
	<a href="/kelas/{{ $kelas->id }}/edit" class="btn btn-success pull-right">Update Kelas</a>

	<h1>Kelas : {{ $kelas->nama }}</h1>
	<br />
	<table class="table table-striped table-hover">
		<tbody>
			<tr>
				<th style="width:150px;">Tahun Ajaran</th>
				<td>: {{ $kelas->ta->periode }}</td>
			</tr>
			<tr>
				<th>Jenjang</th>
				<td>: {{ $kelas->jenjang->nama }}</td>
			</tr>
			<tr>
				<th>Tingkat</th>
				<td>: {{ $kelas->tingkat->nama }}</td>
			</tr>
			<tr>
				<th>Wali Kelas</th>
				<td>: <a href="/karyawan/{{ $kelas->wali_id }}">{{ $kelas->wali->nama }}</a></td>
			</tr>
			<tr>
				<th>Ruang</th>
				<td>: <a href="/ruangan/{{ $kelas->ruang_id }}">{{ $kelas->ruang->kode }} ({{ $kelas->ruang->nama }})</a></td>
			</tr>
		</tbody>
	</table>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">

		<li role="presentation" class="active"><a href="#11" aria-controls="11" role="tab" data-toggle="tab">Daftar Siswa</a></li>
		<li role="presentation"><a href="#12" aria-controls="12" role="tab" data-toggle="tab">Jadwal Pelajaran</a></li>
		<li role="presentation"><a href="#13" aria-controls="13" role="tab" data-toggle="tab">Daftar Nilai</a></li>
		<li role="presentation"><a href="#14" aria-controls="14" role="tab" data-toggle="tab">Absensi</a></li>
	
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		
		<div role="tabpanel" class="tab-pane active" id="11">
			<br />
			<p><a href="/kelas/addSiswa/{{ $kelas->id }}" class="btn btn-success">Update Daftar Siswa</a></p>
			@include('siswa._indexKelas')
		</div>

		<div role="tabpanel" class="tab-pane" id="12">
			<br />
			@include('jadwalPelajaran._perKelas')
		</div>

		<div role="tabpanel" class="tab-pane" id="13">
			<br />
			include('nilai._list', ['jadwals' => $kelas->nilais])
		</div>

		<div role="tabpanel" class="tab-pane" id="14">
			<br />
			include('absensi._list', ['absensis' => $kelas->absensis])
		</div>

	</div>

@stop