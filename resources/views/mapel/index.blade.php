@extends('app')

@section('content')
	
	<a href="/mapel/create" class="btn btn-success pull-right">Tambah Mata Pelajaran</a>

	<h1>Daftar Mata Pelajaran</h1>
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
			@foreach ($mapels as $m)
			<tr>
				<td>{{ $m->kode }}</td>
				<td>{{ $m->nama }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'mapel/'.$m->id]) !!}
		        		<a href="/mapel/{{ $m->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $mapels->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop