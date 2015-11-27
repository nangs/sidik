<a href="/riwayatKepegawaian/create?karyawan_id={{ $karyawan->id }}" class="btn btn-success">Tambah Riwayat Kepegawaian</a>
<br />
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>Jenis SK</th>
			<th>Nomor SK</th>
			<th>Tanggal SK</th>
			<th>TMT</th>
			<th>Masa Kerja</th>
			<th>Gol.</th>
			<th>Gapok</th>
			<th>Penempatan</th>
			<th>Fungsi/Jabatan</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($karyawan->riwayatKepegawaians as $r)
		<tr>
			<td>{{ $r->jenis }}</td>
			<td>{{ $r->nomor_sk }}</td>
			<td>{{ $r->tanggal_sk }}</td>
			<td>{{ $r->tmt }}</td>
			<td>{{ $r->masa_kerja }}</td>
			<td>{{ $r->golongan }}</td>
			<td>{{ $r->gapok }}</td>
			<td>{{ $r->tempat }}</td>
			<td>{{ $r->jabatan }}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'riwayatKepegawaian/'.$r->id]) !!}
	        		<a href="/riwayatKepegawaian/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
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