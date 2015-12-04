@extends('app')

@section('content')
	
	<a href="/jamPelajaran/create" class="btn btn-success pull-right">Tambah Jam Pelajaran</a>

	<h1>Daftar Jam Pelajaran</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Jenjang</th>
				<th>Tingkat</th>
				<th>Jam</th>
				<th>Dari Jam</th>
				<th>Sampai Jam</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($jamPelajarans as $b)
			<tr>
				<td>{{ $b->jenjang->nama }}</td>
				<td>{{ $b->tingkat->nama }}</td>
				<td>{{ $b->jam }}</td>
				<td>{{ $b->dari }}</td>
				<td>{{ $b->sampai }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'jamPelajaran/'.$b->id]) !!}
		        		<a href="/jamPelajaran/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $jamPelajarans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop