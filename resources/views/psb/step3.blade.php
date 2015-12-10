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
			<li class="">
				<span class="single-step">4</span>
				<p>SELESAI<br/></p>
			</li>
		</ul>
	</div>

	<hr />

	<!-- if ($psb->status_pembayaran == 0) -->

	<div class="alert alert-success text-center">
		<h4>
			Data telah kami simpan di database kami. 
			Data akan kami verifikasi. 
			Setelah data terverifikasi Anda dapat melihat jadwal test & wawancara di halaman ini. 
			Simpan alamat URL berikut untuk melihat jadwal test & wawancara di kemudian hari: <br /><br />

			<a href="/psb/step3/{{ $psb->id }}">{{ url('/psb/step3/'.$psb->id)}}</a>

			<br /><br />

			Atau masukkan NISN Calon Siswa di form pencarian NISN:

			<br /><br />

			NISN: {{$psb->calonSiswa->nisn}}

		</h4>
	</div>

	<!-- else

		include('_error')

		include('psb/_formStep2', ['method' => 'POST', 'url' => '/psb/step2'])

	endif -->
	

@stop