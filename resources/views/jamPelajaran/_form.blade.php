{!! Form::model($jamPelajaran, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('tingkat_id', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('tingkat_id', App\Tingkat::selectRaw('CONCAT(nama, " - ", keterangan) as nm, id')->lists('nm', 'id'), $jamPelajaran->tingkat_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jam', 'Jam Ke:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jam', $jamPelajaran->jam, ['class' => 'form-control', 'placeholder' => 'Jam Ke']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('dari', 'Dari Jam:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('time', 'dari', $jamPelajaran->dari, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sampai', 'Sampai Jam:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('time', 'sampai', $jamPelajaran->sampai, ['class' => 'form-control']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}