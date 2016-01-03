@extends('psb')

@section('content')

	<a href="/form-wawancara-calon-santri/create" class="btn btn-success pull-right">Tambah Pertanyaan Wawancara Calon Santri</a>

	<h1>Daftar Pertanyaan Wawancara Calon Santri</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Indikator Variable</th>
				<th>Sub Indikator Variable</th>
				<th>Pertanyaan</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($formWawancaraCalonSantris as $b)
			<tr>
				<td>{{ $b->indikator_variable }}</td>
				<td>{{ $b->sub_indikator_variable }}</td>
				<td>
					<b><span class="fa fa-question-circle"></span> {{ $b->pertanyaan }}</b><br />
					<ul class="list-unstyled">
						@foreach ($b->jawaban as $j)
						<li><span class="fa fa-check-square-o"></span> {{$j->jwb}}</li>
						@endforeach
					</ul>
					{!! Form::open(['method' => 'DELETE', 'url' => 'form-wawancara-calon-santri/'.$b->id]) !!}
		        		<a href="/form-wawancara-calon-santri/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop
