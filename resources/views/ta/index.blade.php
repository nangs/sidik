@extends('psb')

@section('content')

	<a href="/tahun-ajaran/create" class="btn btn-success pull-right">Tambah Tahun Ajaran</a>

	<h1>Daftar Tahun Ajaran</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Periode</th>
				<th>Awal</th>
				<th>Akhir</th>
				<th>Aktif</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tas as $t)
			<tr>
				<td>{{ $t->periode }}</td>
				<td>{{ $t->start }}</td>
				<td>{{ $t->end }}</td>
				<td>{!! $t->active ? '<span class="label label-success">Y</span>' : '<span class="label label-danger">T</span>' !!}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'tahun-ajaran/'.$t->id]) !!}
		        		<!-- <a href="/kalenderAkademik/kalender" class="btn btn-primary btn-xs">Lihat Kalender Akademik</a> -->
		        		<a href="/tahun-ajaran/{{ $t->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tas->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop
