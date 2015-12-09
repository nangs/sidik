@extends('blank')

@section('content')

	<div class="large-16 medium-16 small-16 columns shipping-schema">
		<span class="step-line"></span>
		<ul>
			<li class="shipping-status-active">
				<span class="single-step">1</span>
				<p>PENGAMBILAN FORMULIR<br/><!-- time/status --></p>
			</li>
			<li class="shipping-status-active">
				<span class="single-step">2</span>
				<p>PENGISIAN FORMULIR<br/><!-- time/status --></p>
			</li>
			<li class="">
				<span class="single-step">3</span>
				<p>WAWANCARA<br/></p>
			</li>
			<li class="">
				<span class="single-step">4</span>
				<p>SELESAI<br/></p>
			</li>
		</ul>
	</div>

	<hr />

	<h1 class="text-center text-uppercase">FORMULIR PENDAFTARAN SISWA BARU</h1>
	<h2 class="text-center"><span class="label label-danger">Nomor Pendaftaran : 112</span></h2>
	<hr />

	@include('psb/_form', ['method' => 'POST', 'url' => 'psb'])

	<br />

@stop