@extends('app')

@section('content')
	
	<a href="/wali/create" class="btn btn-success pull-right">Tambah Wali Siswa</a>

	<h1>Daftar Wali Siswa</h1>
	<hr />

	<input type="text" class="form-control" placeholder="Cari" /><br />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Hubungan Keluarga</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($walis as $k)
			<tr>
				<td>{{ $k->nama }}</td>
				<td>{{ $k->alamat }}</td>
				<td>{{ $k->phone }}</td>
				<td><a href="mailto:{{ $k->email }}">{{ $k->email }}</a></td>
				<td>{{ $k->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $k->hub_keluarga }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'wali/'.$k->id]) !!}
		        		<a href="/wali/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $walis->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop