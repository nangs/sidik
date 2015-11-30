@extends('app')

@section('content')
	
	<a href="/tagsBuku/create" class="btn btn-success pull-right">Tambah Tags Buku</a>

	<h1>Daftar Tags Buku</h1>
	<hr />

	@include('tagsBuku._form', ['tagsBuku' => new App\TagsBuku, 'method' => 'POST', 'url' => 'tagsBuku'])

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tagsBukus as $b)
			<tr>
				<td>{{ $b->nama }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'tagsBuku/'.$b->id]) !!}
		        		<a href="/tagsBuku/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tagsBukus->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop