@extends('psb')

@section('content')

	<div class="shipping-schema">
		<span class="step-line"></span>
		<ul>
			<li class="shipping-status-active">
				<span class="single-step">1</span>
				<p>PEMBELIAN FORMULIR<br/><!-- time/status --></p>
			</li>
			<li class="shipping-status-active">
				<span class="single-step">2</span>
				<p>PENGISIAN FORMULIR<br/></p>
			</li>
			<li class="shipping-status-active">
				<span class="single-step">3</span>
				<p>TEST &amp; WAWANCARA<br/></p>
			</li>
			<li class="shipping-status-active">
				<span class="single-step">4</span>
				<p>SELESAI<br/></p>
			</li>
		</ul>
	</div>

	<hr />

	<div class="alert alert-success text-center">
		<h4>
			@if ($psb->status_test == 1)

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

					SELAMAT! Anda diterima di Ma'had Ihya' As Sunnah Tasikmalaya Tahun Ajaran ... di jenjang ... tingkat ...

				@else

					Maaf, setelah melakukan beberapa proses seleksi Anda tidak diterima di Ma'had Ihya' As Sunnah Tasikmalaya.

				@endif

			@endif

		</h4>
	</div>
	

@stop