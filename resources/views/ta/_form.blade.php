{!! Form::model($ta, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('periode', 'Periode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('periode', $ta->periode, ['class' => 'form-control', 'placeholder' => 'yyyy - yyyy']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('start', 'Start:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('start', $ta->start, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('end', 'End:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('end', $ta->end, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('active', 'Active:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('active', [0 => 'Tidak', 1 => 'Ya'], $ta->active, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}