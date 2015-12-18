@extends('print')

@section('content')
	
	<h1 class="text-center">PSB MIAS TA 2016/2017</h1>
	<hr />

	<table class="table table-striped table-bordered table-condensed">
		<tbody>
			<tr>
				<th>Nomor Pendaftaran</th>
				<th>: PSB-{{\App\Psb::jenjangList($psb->jenjang)}}-{{App\Ta::active()->first()->periode}}-{{strtotime($psb->calonSiswa->created_at)}}</th>
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

	<div class="alert alert-success text-center">
		<p>
			Silakan ke bagian keuangan dengan membawa form ini untuk proses pembayaran formulir pendaftaran.<br />
			Gunakan informasi berikut untuk login untuk melanjutkan ke proses berikutnya: <br />
			<strong>Username/Password : {{$psb->calonSiswa->nama}}/{{strtotime($psb->calonSiswa->created_at)}}</strong>
		</p>
	</div>

	
@stop