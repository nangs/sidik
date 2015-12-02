@extends('app')

@section('content')
	
	<div class=" pull-right">
		<a href="/kalenderAkademik/kalender" class="btn btn-primary">Lihat Kalander Akademik</a>
		<a href="/kalenderAkademik/create" class="btn btn-success">Tambah Kalander Akademik</a> 
	</div>

	<h1>Daftar Kalander Akademik</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Dari Tanggal</th>
				<th>Sampai Tanggal</th>
				<th>Kegiatan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($kalenderAkademiks as $b)
			<tr>
				<td>{{ $b->ta->periode }}</td>
				<td>{{ $b->dari }}</td>
				<td>{{ $b->sampai }}</td>
				<td>{{ $b->kegiatan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'kalenderAkademik/'.$b->id]) !!}
		        		<a href="/kalenderAkademik/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $kalenderAkademiks->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop