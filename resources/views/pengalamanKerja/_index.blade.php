<a href="/pengalamanKerja/create?karyawan_id={{ $karyawan->id }}" class="btn btn-success">Tambah Pengalaman Kerja</a>
<br />
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>Instansi/Perusahaan</th>
			<th>Dari</th>
			<th>Sampai</th>
			<th>Masa Kerja</th>
			<th>Jabatan/Fungsi</th>
			<th>Tugas & Tanggung Jawab</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($karyawan->pengalamanKerjas as $r)
		<tr>
			<td>{{ $r->institusi }}</td>
			<td>{{ $r->dari }}</td>
			<td>{{ $r->sampai }}</td>
			<td>{{ $r->durasi() }}</td>
			<td>{{ $r->jabatan }}</td>
			<td>{!! nl2br($r->tugas) !!}</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'pengalamanKerja/'.$r->id]) !!}
	        		<a href="/pengalamanKerja/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
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