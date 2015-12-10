@extends('psb')

@section('content')
	
	<a href="/rekening/create" class="btn btn-success pull-right">Tambah Rekening</a>

	<h1>Daftar Rekening</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Bank</th>
				<th>Pemegang</th>
				<th>Nomor</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($rekenings as $b)
			<tr>
				<td>{{ $b->bank }}</td>
				<td>{{ $b->pemegang }}</td>
				<td>{{ $b->nomor }}</td>
				<td>{{ $b->keterangan }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'rekening/'.$b->id]) !!}
		        		<a href="/rekening/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $rekenings->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop