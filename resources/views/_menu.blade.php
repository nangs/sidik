<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Kelola</h3>
	</div>
	<div class="list-group">

		@if (Auth::check())
		
		<a class="list-group-item" href="/ta">Tahun Ajaran</a>
		<a class="list-group-item" href="/tingkat">Tingkat</a>
		<a class="list-group-item" href="/kelas">Kelas</a>
		<a class="list-group-item" href="/mapel">Mata Pelajaran</a>

		<a class="list-group-item" href="/bagian">Bagian</a>
		<a class="list-group-item" href="/karyawan">Karyawan</a>
		<a class="list-group-item" href="/note/create">Guru</a>
		
		<a class="list-group-item" href="/siswa">Siswa</a>
		<a class="list-group-item" href="/wali">Wali Murid</a>
		
		<a class="list-group-item" href="/note/create">Nilai</a>
		
		@endif

	</div>
</div>