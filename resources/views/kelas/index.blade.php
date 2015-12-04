@extends('app')

@section('content')
	
	<a href="/kelas/create" class="btn btn-success pull-right">Tambah Kelas</a>

	<h1>Daftar Kelas</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Jenjang</th>
				<th>Tingkat</th>
				<th>Nama</th>
				<th>Wali Kelas</th>
				<th>Ruang</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($kelass as $k)
			<tr>
				<td>{{ $k->ta->periode }}</td>
				<td>{{ $k->jenjang->nama }}</td>
				<td>{{ $k->tingkat->nama }}</td>
				<td><a href="/kelas/{{ $k->id }}">{{ $k->nama }}</a></td>
				<td>{{ $k->wali->nama }}</td>
				<td>{{ $k->ruang ? $k->ruang->kode .' ('.$k->ruang->nama.')' : '' }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'kelas/'.$k->id]) !!}
		        		<a href="/kelas/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $kelass->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop