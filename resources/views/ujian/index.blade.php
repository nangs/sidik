@extends('app')

@section('content')
	
	<a href="/ujian/create" class="btn btn-success pull-right">Tambah Jadwal Ujian</a>

	<h1>Daftar Jadwal Ujian</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Jenjang</th>
				<th>Tingkat</th>
				<th>Jenis</th>
				<th>Tanggal</th>
				<th>Mulai</th>
				<th>Selesai</th>
				<th>Mata Pelajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ujians as $t)
			<tr>
				<td>{{ $t->ta->periode }}</td>
				<td>{{ $t->jenjang->nama }}</td>
				<td>{{ $t->tingkat>nama }}</td>
				<td>{{ $t->jenis>nama }}</td>
				<td>{{ $t->tanggal }}</td>
				<td>{{ $t->dari }}</td>
				<td>{{ $t->sampai }}</td>
				<td>{{ $t->mapel->nama }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'ta/'.$t->id]) !!}
		        		<a href="/ujian/{{ $t->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $ujians->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop