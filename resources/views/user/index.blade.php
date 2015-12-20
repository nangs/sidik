@extends('psb')

@section('content')

	<a href="/user/create" class="btn btn-success pull-right">Tambah User</a>

	<h1>Daftar User</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email/Username</th>
				<th>Role</th>
				<th data-orderable="false">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $b)
			<tr>
				<td>{{ $b->name }}</td>
				<td>{{ $b->email }}</td>
				<td>{{ $b->role }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'user/'.$b->id]) !!}
		        		<a href="/user/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
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

		$('table').DataTable({"order": [[ 0, "asc" ]]});

		// {pageLength: 3} ==> for datatables

	</script>

@stop
