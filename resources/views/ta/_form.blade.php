{!! Form::model($ta, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('periode', 'Periode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('periode', $ta->periode, ['class' => 'form-control', 'placeholder' => 'yyyy - yyyy']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('start', 'Awal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'start', $ta->start, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('end', 'Akhir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'end', $ta->end, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('active', 'Aktif:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="active" value="1" {{ $ta->active ? 'checked' : '' }} /> Ya  <br />
			<input type="radio" name="active" value="0" {{ $ta->active ? '' : 'checked' }} /> Tidak 
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}