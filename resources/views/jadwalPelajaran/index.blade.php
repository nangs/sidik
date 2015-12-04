@extends('app')

@section('content')
	
	<a href="/jadwalPelajaran/create" class="btn btn-success pull-right">Tambah Jadwal Pelajaran</a>

	<h1>Daftar Jadwal Pelajaran</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tahun Ajaran</th>
				<th>Jenjang</th>
				<th>Tingkat</th>
				<th>Kelas</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Guru</th>
				<th>Ruangan</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($jadwalPelajarans as $b)
			<tr>
				<td>{{ $b->ta->periode }}</td>
				<td>{{ $b->jenjang->nama }}</td>
				<td>{{ $b->tingkat->nama }} ({{ $b->tingkat->keterangan }})</td>
				<td><a href="/kelas/{{ $b->kelas_id }}">{{ $b->kelas->nama }}</a></td>
				<td>{{ $b->hariList()[$b->hari] }}</td>
				<td>{{ $b->jam->jam }} ({{ $b->jam->dari }} - {{ $b->jam->sampai }})</td>
				<td>{{ $b->mapel->nama }}</td>
				<td><a href="/karyawan/{{ $b->guru_id }}">{{ $b->guru->nama }}</a></td>
				<td>{{ $b->ruang->kode }} ({{ $b->ruang->nama }})</td>
				<td>{{ $b->keterangan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'jadwalPelajaran/'.$b->id]) !!}
		        		<a href="/jadwalPelajaran/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $jadwalPelajarans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop