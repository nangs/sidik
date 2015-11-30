@extends('app')

@section('content')
	
	<a href="/ruangan/create" class="btn btn-success pull-right">Tambah Ruangan</a>

	<h1>Daftar Ruangan</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Bangunan</th>
				<th>Luas (m<sup>2</sup>)</th>
				<th>Kapasitas (orang)</th>
				<th>Penggunaan</th>
				<th>Penanggungjawab</th>
				<th>Kondisi</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ruangans as $b)
			<tr>
				<td>{{ $b->kode }}</td>
				<td>{{ $b->nama }}</td>
				<td>{{ $b->bangunan->nama }}</td>
				<td>{{ $b->luas }}</td>
				<td>{{ $b->kapasitas }}</td>
				<td>{{ $b->penggunaan }}</td>
				<td>{{ $b->penanggungjawab->nama }}</td>
				<td>{{ $b->kondisi }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'ruangan/'.$b->id]) !!}
		        		<a href="/ruangan/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $ruangans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop