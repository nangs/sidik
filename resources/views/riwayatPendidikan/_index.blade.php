<a href="/riwayatPendidikan/create?karyawan_id={{ $karyawan->id }}" class="btn btn-success">Tambah Riwayat Pendidikan</a>
<br />
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>Jenjang</th>
			<th>Institusi</th>
			<th>Kota</th>
			<th>Fakultas</th>
			<th>Jurusan</th>
			<th>Tahun Lulus</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($karyawan->riwayatPendidikans as $r)
		<tr>
			<td>{{ $r->jenjang }}</td>
			<td>{{ $r->institusi }}</td>
			<td>{{ $r->kota }}</td>
			<td>{{ $r->fakultas }}</td>
			<td>{{ $r->jurusan }}</td>
			<td>{{ $r->lulus }}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'riwayatPendidikan/'.$r->id]) !!}
	        		<a href="/riwayatPendidikan/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
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