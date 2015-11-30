{!! Form::model($jabatan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('bagian_id', 'Bagian:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('bagian_id', App\Bagian::lists('nama', 'id'), $jabatan->bagian_id, ['class' => 'form-control', 'rows' => 5]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Jabatan/Fungsi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $jabatan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tugas', 'Tugas/Tanggung Jawab:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('tugas', $jabatan->tugas, ['class' => 'form-control', 'placeholder' => 'Tugas/Tanggung Jawab']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}