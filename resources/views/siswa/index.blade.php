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
				<th>Jns Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Aktif</th>
				<th style="width:120px;" data-orderable="false">Aksi</th>
			</tr>
			{!! Form::open(['method' => 'GET']) !!}
			<tr>
				<td>
					{!! Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
				</td>
				<td><input type="text" placeholder="NIS" name="nis" class="form-control" /></td>
				<td><input type="text" placeholder="NISN" name="nisn" class="form-control" /></td>
				<td>
					{!! Form::select('jns_kelamin', ['all' => 'All', '1' => 'L', '0' => 'P'], 'all', ['class' => 'form-control']) !!}
				</td>
				<td><input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control" /></td>
				<td><input type="text" placeholder="Tgl Lahir" name="tgl_lahir" class="form-control" /></td>
				<td>
					{!! Form::select('jns_kelamin', ['all' => 'All', '1' => 'Y', '0' => 'T'], 'all', ['class' => 'form-control']) !!}
				</td>

				<td>
					{!! Form::submit('Filter', ['class' => 'btn btn-success']) !!} 
					<a href="/siswa" class="btn btn-success"><span class="fa fa-refresh"></span></a>
				</td>
			</tr>
			{!! Form::close() !!}
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

	{!! $siswas->render() !!}

@stop

@section('css')
	
	<!-- <link href="/DataTables/datatables.min.css" rel="stylesheet"> -->
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		// $('#siswa-list').DataTable();

	</script>

@stop