@extends('app')

@section('content')
	
	<a href="/kategoriBuku/create" class="btn btn-success pull-right">Tambah Kategori Buku</a>

	<h1>Daftar Kategori Buku</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($kategoriBukus as $b)
			<tr>
				<td>{{ $b->kode }}</td>
				<td>{{ $b->nama }}</td>
				<td>{{ $b->keterangan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'kategoriBuku/'.$b->id]) !!}
		        		<a href="/kategoriBuku/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $kategoriBukus->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop