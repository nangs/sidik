@extends('psb')

@section('content')

	@include('_step', ['step' => 2])

	<hr />

	@if ($psb->status_pembayaran == 0)

		<div class="alert alert-success text-center">
			<h4>
				Data telah kami simpan di database kami. 
				Pembayaran Anda sedang dikonfirmasi. 
				Setelah pembayaran kami terima Anda dapat melengkapi formulir pendaftaran di halaman ini.
			</h4>
		</div>

	@include('psb._show')

	@else

		<div class="alert alert-success text-center">
			<h4>
				Pembayaran telah kami verifikasi. Silakan lengkapi formulir di bawah ini.
			</h4>
		</div>

		@include('_error1')

		@include('psb/_formStep2', ['method' => 'PATCH', 'url' => '/psb/step2/'.$psb->id])

	@endif
	

@stop