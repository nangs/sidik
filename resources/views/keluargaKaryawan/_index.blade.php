<a href="/keluargaKaryawan/create?karyawan_id={{ $karyawan->id }}" class="btn btn-success">Tambah Keluarga</a>
<br />
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Usia</th>
			<th>Hub. Keluarga</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($karyawan->keluargas as $k)
		<tr>
			<td>{{ $k->nama }}</td>
			<td>{{ $k->jns_kelamin ? 'Laki - Laki' : 'Perempuan' }}</td>
			<td>{{ $k->tempat_lahir }}</td>
			<td>{{ $k->tgl_lahir != '0000-00-00' ? $k->tgl_lahir : '' }}</td>
			<td>{{ $k->status && $k->tgl_lahir != '0000-00-00' ? $k->umur() : '' }}</td>
			<td>{{ $k->hub_keluarga }}</td>
			<td>{{ $k->status ? 'Hidup' : 'Meninggal' }}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'keluargaKaryawan/'.$k->id]) !!}
	        		<a href="/keluargaKaryawan/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
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