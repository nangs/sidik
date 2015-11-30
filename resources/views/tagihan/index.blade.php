@extends('app')

@section('content')
	
	<a href="/tagihan/create" class="btn btn-success pull-right">Tambah Tagihan</a>

	<h1>Daftar Tagihan</h1>
	<hr />
 
	<table class="table table-striped" id="tagihan-list">
		<thead>
			<tr>
				<th>Nomor</th>
				<th>Tahun Ajaran</th>
				<th>Semester</th>
				<th>Bulan</th>
				<th>Jenis Tagihan</th>
				<th>Siswa</th>
				<th>Jumlah</th>
				<th>Jatuh Tempo</th>
				<th>Status</th>
				<th>Tanggal Bayar</th>
				<th>Keterangan</th>
				<th style="width:100px;" data-orderable="false">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tagihans as $k)
			<tr>
				<td>{{ $k->nomor }}</td>
				<td>{{ $k->ta->periode }}</td>
				<td>{{ $k->semester }}</td>
				<td>{{ App\Tagihan::bulan[$k->bulan] }}</td>
				<td>{{ $k->jenis }}</td>
				<td><a href="/siswa/{{ $k->siswa_id }}">{{ $k->siswa->nama }}</a></td>
				<td>{{ number_format($k->jumlah, 0, ',', '.') }}</td>
				<td>{{ $k->jatuh_tempo }}</td>
				<td>{!! $k->status ? '<span class="label label-success">Lunas</span>' : '<span class="label label-danger">Belum Lunas</span>' !!}</td>
				<td>{{ $k->tanggal_bayar }}</td>
				<td>{{ $k->keterangan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'tagihan/'.$k->id]) !!}
		        		<a href="/tagihan/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop

@section('css')
	
	<!-- <link href="/DataTables/datatables.min.css" rel="stylesheet"> -->
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		// $('#tagihan-list').DataTable();

	</script>

@stop