@extends('psb')

@section('content')

	<div class="shipping-schema">
		<span class="step-line"></span>
		<ul>
			<li class="shipping-status-active">
				<span class="single-step">1</span>
				<p>PEMBELIAN FORMULIR<br/><!-- time/status --></p>
			</li>
			<li class="shipping-status">
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

	@include('_error')

	@include('psb/_formStep1', ['method' => 'POST', 'url' => '/psb/step1'])

@stop