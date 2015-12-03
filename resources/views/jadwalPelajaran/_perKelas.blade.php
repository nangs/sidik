<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

@for ($i=1;$i<=7;$i++)

	<li role="presentation" class="{{ $i == 1 ? 'active' : '' }}">
		<a href="#11{{ $i }}" aria-controls="11{{ $i }}" role="tab" data-toggle="tab">{{ App\JadwalPelajaran::hariList()[$i] }}</a>
	</li>

@endfor

</ul>

<!-- Tab panes -->
<div class="tab-content">

	@for ($i=1;$i<=7;$i++)

	<div role="tabpanel" class="tab-pane {{ $i == 1 ? 'active' : '' }}" id="11{{ $i }}">
		<br />
		@include('jadwalPelajaran._perHari', [
			'hari'				=> $i,
			'jadwalPelajarans'	=> $kelas->jadwalPelajarans()
									->where('hari', $i)->get(),
		])
	</div>

	@endfor

</div>

