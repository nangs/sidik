@extends('psb')

@section('content')

	@include('_step', ['step' => 4])

	<hr />

	<div class="alert alert-success text-center">
		<h4>
			@if ($psb->status_test == 1 && $psb->status == 0)

				Proses pendaftaran telah selesai. 
				Anda dapat melihat pengumuman di halaman ini setelah kami melakukan seleksi. 
				Simpan alamat URL berikut untuk melihat pengumuman di kemudian hari: <br /><br />

				<a href="/psb/step4/{{ $psb->id }}">{{ url('/psb/step4/'.$psb->id) }}</a>

				<br /><br />

				Atau masukkan Nomor Pendaftaran Calon Siswa di form pencarian Nomor Pendaftaran:

				<br /><br />

				Nomor Pendaftaran: {{ strtotime($psb->created_at) }}

			@else

				@if ($psb->status == 1)

					Selamat, {{$psb->calonSiswa->nama}}! Anda diterima di Ma'had Ihya' As Sunnah Tasikmalaya Tahun Ajaran 2016/2017 di jenjang {{\App\Psb::jenjangList($psb->jenjang)}} tingkat {{\App\Psb::tingkatList($psb->tingkat)}} Silakan melakukan daftar ulang pada tanggal ... sampai ...

				@else ($psb->status == 2)

					Maaf, {{$psb->calonSiswa->nama}}. Setelah melakukan beberapa proses seleksi Anda tidak diterima di Ma'had Ihya' As Sunnah Tasikmalaya.

				@endif

			@endif

		</h4>
	</div>
	

@stop