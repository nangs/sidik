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
				<th style="width:100px;">Aksi</th>
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

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop