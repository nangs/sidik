@extends('app')

@section('content')
	
	<a href="/bagian/create" class="btn btn-success pull-right">Tambah Bagian</a>

	<h1>Daftar Bagian</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($bagians as $b)
			<tr>
				<td>{{ $b->kode }}</td>
				<td>{{ $b->nama }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'bagian/'.$b->id]) !!}
		        		<a href="/bagian/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $bagians->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop