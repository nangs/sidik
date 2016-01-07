<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Data Calon Siswa</a></li>
	<li role="presentation"><a href="#9" aria-controls="9" role="tab" data-toggle="tab">Dokumen</a></li>
	<li role="presentation"><a href="#5" aria-controls="5" role="tab" data-toggle="tab">Asal Sekolah</a></li>
	<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Ayah</a></li>
	<li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Ibu</a></li>
	<li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Wali</a></li>
	<li role="presentation"><a href="#6" aria-controls="6" role="tab" data-toggle="tab">Alamat</a></li>
	<li role="presentation"><a href="#7" aria-controls="7" role="tab" data-toggle="tab">Beasiswa</a></li>
	<li role="presentation"><a href="#8" aria-controls="8" role="tab" data-toggle="tab">Prestasi</a></li>
	<li role="presentation"><a href="#10" aria-controls="10" role="tab" data-toggle="tab">Wawancara</a></li>
	<li role="presentation"><a href="#11" aria-controls="11" role="tab" data-toggle="tab">Wawancara Orang Tua</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="1">
		<br />
		@include('psb._calonSiswa', ['calonSiswa' => $psb->calonSiswa])
	</div>

	<div role="tabpanel" class="tab-pane" id="9">
		<br />
		@include('psb._dokumen')
	</div>

	<div role="tabpanel" class="tab-pane" id="5">
		<br />
		@if ($psb->calonSiswa->asalSekolah)
		@include('psb._asalSekolah', ['asalSekolah' => $psb->calonSiswa->asalSekolah])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="2">
		<br />
		@if ($ayah = $psb->calonSiswa->ortu()->ayah()->first())
		@include('psb._ortu', ['ortu' => $ayah])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="3">
		<br />
		@if ($ibu = $psb->calonSiswa->ortu()->ibu()->first())
		@include('psb._ortu', ['ortu' => $ibu])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="4">
		<br />
		@if ($wali = $psb->calonSiswa->ortu()->wali()->first())
		@include('psb._ortu', ['ortu' => $wali])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="6">
		<br />
		@if ($psb->calonSiswa->alamat)
		@include('psb._alamatCalonSiswa', ['alamat' => $psb->calonSiswa->alamat])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="7">
		<br />
		@include('psb._beasiswa', ['beasiswa' => $psb->calonSiswa->beasiswa])
	</div>

	<div role="tabpanel" class="tab-pane" id="8">
		<br />
		@include('psb._prestasi', ['prestasi' => $psb->calonSiswa->prestasi])
	</div>

	<div role="tabpanel" class="tab-pane" id="10">
		<br />
		@include('psb._wawancara', ['wawancara' => $psb->calonSiswa->wawancara])
	</div>

	<div role="tabpanel" class="tab-pane" id="11">
		<br />
		@include('psb._wawancaraOrtu', ['wawancara' => $psb->calonSiswa->wawancaraOrtu])
	</div>

</div>
