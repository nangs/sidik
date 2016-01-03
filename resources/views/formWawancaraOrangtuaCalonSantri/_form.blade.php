{!! Form::model($formWawancaraOrangtuaCalonSantri, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('indikator_variable', 'Indikator Variable:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('indikator_variable', $formWawancaraOrangtuaCalonSantri->indikator_variable, ['class' => 'form-control', 'placeholder' => 'Indikator Variable']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('pertanyaan', 'Pertanyaan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('pertanyaan', $formWawancaraOrangtuaCalonSantri->pertanyaan, ['class' => 'form-control', 'placeholder' => 'Pertanyaan']) !!}
		</div>
	</div>

	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th> Jawaban </th>
				<th style="width:100px;"> Nilai </th>
				<th style="width:50px;"> <a href="#" class="add"><span class="fa fa-plus"></span></a> </th>
			</tr>
		</thead>
		<tbody id="jawaban">
			@foreach ($formWawancaraOrangtuaCalonSantri->jawaban as $j)
			<tr>
				<td> {!! Form::text('jawaban['.$j->id.'][jawaban]', $j->jawaban, ['class' => 'form-control', 'placeholder' => 'Jawaban']) !!} </td>
				<td> {!! Form::text('jawaban['.$j->id.'][nilai]', $j->nilai, ['class' => 'form-control', 'placeholder' => 'Nilai']) !!} </td>
				<td> <a href="#" class="remove"><span class="fa fa-remove"></span></a> </td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}

@section('script')
	<script type="text/javascript">
		$(function() {
			var i = 0;
			$('.add').click(function() {
				i++;
				var row = '<tr>' +
					'<td><input class="form-control" placeholder="Jawaban" name="jawaban['+ i +'][jawaban]" type="text"></td>' +
					'<td><input class="form-control" placeholder="Nilai" name="jawaban['+ i +'][nilai]" type="text"></td>' +
					'<td><a href="#" class="remove"><span class="fa fa-remove"></span></a></td>' +
					'</tr>';

				$('#jawaban').append(row);

				return false;
			});

			$('#jawaban').on('click', '.remove', function() {
				$(this).parent().parent().remove();
				return false;
			});
		});

	</script>

@stop
