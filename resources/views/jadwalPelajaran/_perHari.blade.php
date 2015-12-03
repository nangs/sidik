<p>
	@if (count($jadwalPelajarans))
	<a href="/kelas/editJadwal/{{ $kelas->id }}/?hari={{ $hari }}" class="btn btn-success">Update Jadwal Pelajaran</a>
	@else
	<a href="/kelas/createJadwal/{{ $kelas->id }}/?hari={{ $hari }}" class="btn btn-success">Input Jadwal Pelajaran</a>
	@endif

</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Jam</th>
			<th>Mata Pelajaran</th>
			<th>Guru</th>
			<th>Ruangan</th>
			<th>Keterangan</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($jadwalPelajarans as $b)
		<tr>
			<td>{{ $b->jam->jam }} ({{ $b->jam->dari }} - {{ $b->jam->sampai }})</td>
			<td>{{ $b->mapel->nama }}</td>
			<td>{{ $b->guru->nama }}</td>
			<td>{{ $b->ruang->kode }} ({{ $b->ruang->nama }})</td>
			<td>{{ $b->keterangan }}</td>
		</tr>
		@endforeach
	</tbody>
</table>