@extends('app')

@section('content')
	
	<a href="/jenjang/create" class="btn btn-success pull-right">Tambah Jenjang</a>

	<h1>Daftar Jenjang</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($jenjangs as $b)
			<tr>
				<td>{{ $b->nama }}</td>
				<td>{{ $b->keterangan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'jenjang/'.$b->id]) !!}
		        		<a href="/jenjang/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $jenjangs->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop