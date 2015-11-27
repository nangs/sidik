@extends('app')

@section('content')
	
	<a href="/siswa/create" class="btn btn-success pull-right">Tambah Siswa</a>

	<h1>Daftar Siswa</h1>
	<hr />

	<table class="table table-striped" id="siswa-list">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIS</th>
				<th>NISN</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Active</th>
				<th data-orderable="false">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($siswas as $s)
			<tr>
				<td><a href="/siswa/{{ $s->id }}">{{ $s->nama }}</a></td>
				<td>{{ $s->nis }}</td>
				<td>{{ $s->nisn }}</td>
				<td>{{ $s->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $s->tempat_lahir }}</td>
				<td>{{ $s->tgl_lahir }}</td>
				<td>{!! $s->active ? '<span class="label label-success">Y</span>' : '<span class="label label-danger">T</span>' !!}</td>
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

@stop

@section('css')
	
	<link href="/DataTables/datatables.min.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		$('#siswa-list').DataTable();

	</script>

@stop