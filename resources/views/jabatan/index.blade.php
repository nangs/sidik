@extends('app')

@section('content')
	
	<a href="/jabatan/create" class="btn btn-success pull-right">Tambah Jabatan</a>

	<h1>Daftar Jabatan</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Bagian</th>
				<th>Jabatan/Fungsi</th>
				<th>Tugas/Tanggung jawab</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($jabatans as $b)
			<tr>
				<td>{{ $b->bagian->nama }}</td>
				<td>{{ $b->nama }}</td>
				<td>{!! nl2br($b->tugas) !!}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'jabatan/'.$b->id]) !!}
		        		<a href="/jabatan/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $jabatans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop