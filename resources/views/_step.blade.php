<div class="shipping-schema">
	<span class="step-line"></span>
	<ul>
		<li class="shipping-status{{ ($step >= 1) ? '-active' : '' }}">
			<span class="single-step">1</span>
			<p>PEMBAYARAN BIAYA PENDAFTARAN<br/><!-- time/status --></p>
		</li>
		<li class="shipping-status{{ ($step >= 2) ? '-active' : '' }}">
			<span class="single-step">2</span>
			<p>PENGISIAN FORMULIR<br/></p>
		</li>
		<li class="shipping-status{{ ($step >= 3) ? '-active' : '' }}">
			<span class="single-step">3</span>
			<p>TEST &amp; WAWANCARA<br/></p>
		</li>
		<li class="shipping-status{{ ($step == 4) ? '-active' : '' }}">
			<span class="single-step">4</span>
			<p>PENGUMUMAN<br/></p>
		</li>
	</ul>
</div>