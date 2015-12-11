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
			<li class="">
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

	@if ($psb->status_pembayaran == 0)

	<div class="alert alert-success text-center">
		<h4>
			Data telah kami simpan di database kami. 
			Pembayaran Anda sedang dikonfirmasi. 
			Setelah pembayaran kami terima Anda dapat melengkapi formulir pendaftaran di halaman ini. 
			Simpan alamat URL berikut untuk melengkapi formulir pendaftaran di kemudian hari: <br /><br />

			<a href="/psb/step2/{{ $psb->id }}">{{ url('/psb/step2/'.$psb->id)}}</a>

			<br /><br />

			Atau masukkan Nomor Pendaftaran Calon Siswa di form pencarian Nomor Pendaftaran:

			<br /><br />

			Nomor Pendaftaran: {{ strtotime($psb->created_at)}}

		</h4>
	</div>

	@else

		@include('_error')

		@include('psb/_formStep2', ['method' => 'PATCH', 'url' => '/psb/step2/'.$psb->id])

	@endif
	

@stop