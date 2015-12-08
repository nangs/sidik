<table class="table table-striped" id="siswa-list">
	<thead>
		<tr>
			<th>Nama</th>
			<th>NIS</th>
			<th>NISN</th>
			<th>Jns Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Aktif</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($kelas->siswas as $s)
		<tr>
			<td><a href="/siswa/{{ $s->id }}">{{ $s->nama }}</a></td>
			<td>{{ $s->nis }}</td>
			<td>{{ $s->nisn }}</td>
			<td>{{ $s->jns_kelamin == 1 ? 'L' : 'P' }}</td>
			<td>{{ $s->tempat_lahir }}</td>
			<td>{{ $s->tgl_lahir }}</td>
			<td>{!! $s->active ? '<span class="label label-success">Y</span>' : '<span class="label label-danger">T</span>' !!}</td>
		</tr>
		@endforeach
	</tbody>
</table>