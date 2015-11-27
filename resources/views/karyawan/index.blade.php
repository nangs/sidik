@extends('app')

@section('content')
	
	<a href="/karyawan/create" class="btn btn-success pull-right">Tambah Guru/Karyawan</a>

	<h1>Daftar Guru & Karyawan</h1>
	<hr />

	<table class="table table-striped" id="karyawan-list">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIK</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Gender</th>
				<th>Gol. Darah</th>
				<th>Nikah</th>
				<!-- <th>Jml. Anak</th>
				<th>Kota Asal</th> -->
				<th>Alamat</th>
				<th>Telepon/HP, Email</th>
				<th>Golongan</th>
				<th style="width:100px;" data-orderable="false">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($karyawans as $k)
			<tr>
				<td><a href="/karyawan/{{ $k->id }}">{{ $k->nama }}</a></td>
				<td>{{ $k->nik }}</td>
				<td>{{ $k->tempat_lahir }}<br /> {{ $k->tgl_lahir }}</td>
				<td>{{ $k->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $k->gol_darah }}</td>
				<td>{!! $k->nikah ? '<span class="label label-success">Y</span>' : '<span class="label label-danger">T</span>' !!}</td>
				<!-- <td>{{ $k->jml_anak }}</td>
				<td>{{ $k->kota_asal }}</td> -->
				<td>{{ $k->alamat }}</td>
				<td>{{ $k->phone }}<br /><a href="mailto:{{ $k->email }}">{{ $k->email }}</a></td>
				<td>{{ $k->golongan }}</td>
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

@stop

@section('css')
	
	<link href="/DataTables/datatables.min.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		$('#karyawan-list').DataTable();

	</script>

@stop