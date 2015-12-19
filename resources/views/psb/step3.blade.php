@extends('psb')

@section('content')

	@include('_step', ['step' => 3])

	<hr />


	<div class="alert alert-success">
		<h4>

			@if ($psb->status_verifikasi_data == 0)

			Data telah kami simpan di database kami.
			Data akan kami verifikasi.
			Setelah data terverifikasi Anda dapat melihat jadwal test & wawancara di halaman ini.
			Gunakan informasi berikut untuk login untuk melanjutkan ke proses berikutnya:
			<br /><br />

			<strong>Username/Password : {{$psb->calonSiswa->nama}}/{{strtotime($psb->calonSiswa->created_at)}}</strong>

			@else

			Data Anda telah diverivikasi.
			Silakan melakukan test & wawancara pada tanggal 21 - 31 Desember 2015 pukul 07:00 - 11:00 WIB di Ma'had Ihya' As Sunnah dengan membawa kelengkapan dokumen sebagai berikut:

			<br /><br />

			<ul>
				<li>Foto Copy Rapor 2 Semester Terakhir</li>
				<li>Menyerahkan NISN untuk SMP, SMA</li>
				<li>Foto Copy akta kelahiran 2 lembar</li>
				<li>Foto Copy kartu keluarga 2 Lembar</li>
				<li>Pas foto 2x3 dan 3x4 masing-masing 6 lembar</li>
				<li>Surat keterangan sehat dari RSUD pemerintah setempat dan wajib dilengkapi tes laboratorium untuk HbSAg/Hepatitis B</li>
			</ul>

			<br /><br />

			Gunakan informasi berikut untuk login untuk melihat pengumuman:
			<br /><br />

			<strong>Username/Password : {{$psb->calonSiswa->nama}}/{{strtotime($psb->calonSiswa->created_at)}}</strong>

			@endif

			<br /><br />

			<div class="text-center">
				<a href="/psb/printFormulir/{{$psb->id}}" class="btn btn-success" target="_blank"><span class="fa fa-print"></span> Print Formulir</a>
				<a href="/psb/edit/{{$psb->id}}" class="btn btn-success" target="_blank"><span class="fa fa-edit"></span> Edit Formulir</a>
			</div>

		</h4>
	</div>

	@include('psb._show')

@stop
