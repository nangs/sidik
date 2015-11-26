@extends('app')

@section('content')
	
	<a href="/karyawan/create" class="btn btn-success pull-right">Tambah Karyawan</a>

	<h1>Daftar Karyawan</h1>
	<hr />

	<input type="text" class="form-control" placeholder="Cari" /><br />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>NIK</th>
				<th>Nama</th>
				<!-- <th>Kota Asal</th> -->
				<th>Alamat</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th style="width:100px;">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($karyawans as $k)
			<tr>
				<td>{{ $k->nik }}</td>
				<td>{{ $k->nama }}</td>
				<!-- <td>{{ $k->kota_asal }}</td> -->
				<td>{{ $k->alamat }}</td>
				<td>{{ $k->phone }}</td>
				<td><a href="mailto:{{ $k->email }}">{{ $k->email }}</a></td>
				<td>{{ $k->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $k->tempat_lahir }}</td>
				<td>{{ $k->tgl_lahir }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'karyawan/'.$k->id]) !!}
		        		<a href="/karyawan/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $karyawans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop