@extends('app')

@section('content')
	
	<a href="/jenisUjian/create" class="btn btn-success pull-right">Tambah Jenis Ujian</a>

	<h1>Daftar Jenis Ujian</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Bobot Nilai</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($jenisUjians as $b)
			<tr>
				<td>{{ $b->kode }}</td>
				<td>{{ $b->nama }}</td>
				<td>{{ $b->bobot }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'jenisUjian/'.$b->id]) !!}
		        		<a href="/jenisUjian/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $jenisUjians->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop