@extends('app')

@section('content')
	
	<a href="/siswa/create" class="btn btn-success pull-right">Tambah Siswa</a>

	<h1>Daftar Siswa</h1>
	<hr />

	<input type="text" class="form-control" placeholder="Cari" /><br />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Wali</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($siswas as $s)
			<tr>
				<td>{{ $s->nis }}</td>
				<td>{{ $s->nama }}</td>
				<td>{{ $s->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $s->tempat_lahir }}</td>
				<td>{{ $s->tgl_lahir }}</td>
				<td>{{ $s->wali->nama }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'siswa/'.$s->id]) !!}
		        		<a href="/siswa/{{ $s->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $siswas->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop