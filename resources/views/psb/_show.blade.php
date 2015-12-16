<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#0" aria-controls="0" role="tab" data-toggle="tab">Data PSB</a></li>
	<li role="presentation"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Data Calon Siswa</a></li>
	<li role="presentation"><a href="#9" aria-controls="9" role="tab" data-toggle="tab">Dokumen</a></li>
	<li role="presentation"><a href="#5" aria-controls="5" role="tab" data-toggle="tab">Asal Sekolah</a></li>
	<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Data Ayah</a></li>
	<li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Data Ibu</a></li>
	<li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Data Wali</a></li>
	<li role="presentation"><a href="#6" aria-controls="6" role="tab" data-toggle="tab">Alamat</a></li>
	<li role="presentation"><a href="#7" aria-controls="6" role="tab" data-toggle="tab">Beasiswa</a></li>
	<li role="presentation"><a href="#8" aria-controls="6" role="tab" data-toggle="tab">Prestasi</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="0">
		<br />
		@include('psb._psb')
	</div>

	<div role="tabpanel" class="tab-pane" id="1">
		<br />
		@include('psb._calonSiswa', ['calonSiswa' => $psb->calonSiswa])
	</div>

	<div role="tabpanel" class="tab-pane" id="9">
		<br />
		@include('psb._dokumen', ['dokumen' => $psb->calonSiswa->dokumen])
	</div>

	<div role="tabpanel" class="tab-pane" id="5">
		<br />
		@if ($psb->calonSiswa->asalSekolah)
		@include('psb._asalSekolah', ['asalSekolah' => $psb->calonSiswa->asalSekolah])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="2">
		<br />
		@include('psb._ortu', ['ortu' => $psb->calonSiswa->ortu()->ayah()->first()])
	</div>

	<div role="tabpanel" class="tab-pane" id="3">
		<br />
		@include('psb._ortu', ['ortu' => $psb->calonSiswa->ortu()->ibu()->first()])
	</div>

	<div role="tabpanel" class="tab-pane" id="4">
		<br />
		@include('psb._ortu', ['ortu' => $psb->calonSiswa->ortu()->wali()->first()])
	</div>

	<div role="tabpanel" class="tab-pane" id="6">
		<br />
		@if ($psb->calonSiswa->alamat)
		@include('psb._alamatCalonSiswa', ['alamat' => $psb->calonSiswa->alamat])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="7">
		<br />
		@if ($psb->calonSiswa->beasiswa)
		@include('psb._beasiswa', ['beasiswa' => $psb->calonSiswa->beasiswa])
		@endif
	</div>

	<div role="tabpanel" class="tab-pane" id="8">
		<br />
		@if ($psb->calonSiswa->prestasi)
		@include('psb._prestasi', ['prestasi' => $psb->calonSiswa->prestasi])
		@endif
	</div>

</div>