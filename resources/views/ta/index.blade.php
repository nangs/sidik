@extends('app')

@section('content')
	
	<a href="/ta/create" class="btn btn-success pull-right">Tambah Tahun Ajaran</a>

	<h1>Daftar Tahun Ajaran</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Periode</th>
				<th>Start</th>
				<th>End</th>
				<th>Active</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tas as $t)
			<tr>
				<td>{{ $t->periode }}</td>
				<td>{{ $t->start }}</td>
				<td>{{ $t->end }}</td>
				<td>{!! $t->active ? '<span class="fa fa-check"></span>' : '' !!}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'ta/'.$t->id]) !!}
		        		<a href="/ta/{{ $t->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tas->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop