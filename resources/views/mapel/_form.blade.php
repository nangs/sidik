{!! Form::model($mapel, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('kode', 'Kode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kode', $mapel->kode, ['class' => 'form-control', 'placeholder' => 'Kode']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $mapel->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}