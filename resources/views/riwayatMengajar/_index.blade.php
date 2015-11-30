<a href="/riwayatMengajar/create?karyawan_id={{ $karyawan->id }}" class="btn btn-success">Tambah Riwayat Mengajar</a>
<br />
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>Mata Pelajaran</th>
			<th>Tingkat</th>
			<th>Sekolah/Institusi</th>
			<th>Dari Tahun</th>
			<th>Sampai Tahun</th>
			<th>Durasi</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($karyawan->riwayatMengajars as $r)
		<tr>
			<td>{{ $r->mapel }}</td>
			<td>{{ $r->tingkat }}</td>
			<td>{{ $r->institusi }}</td>
			<td>{{ $r->dari }}</td>
			<td>{{ $r->sampai }}</td>
			<td>{{ $r->durasi }}</td>
			<td>{{ $r->keterangan }}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'riwayatMengajar/'.$r->id]) !!}
	        		<a href="/riwayatMengajar/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
	        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
        		{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop