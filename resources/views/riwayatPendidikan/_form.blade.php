{!! Form::model($riwayatPendidikan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $riwayatPendidikan->karyawan_id) !!}

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $riwayatPendidikan->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('jenjang', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenjang', App\RiwayatPendidikan::listJenjang(), $riwayatPendidikan->jenjang, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('institusi', 'Institusi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('institusi', $riwayatPendidikan->institusi, ['class' => 'form-control', 'placeholder' => 'Institusi']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kota', 'Kota:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kota', $riwayatPendidikan->kota, ['class' => 'form-control', 'placeholder' => 'Kota']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('fakultas', 'Fakultas:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('fakultas', $riwayatPendidikan->fakultas, ['class' => 'form-control', 'placeholder' => 'Fakultas']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jurusan', 'Jurusan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jurusan', $riwayatPendidikan->jurusan, ['class' => 'form-control', 'placeholder' => 'Jurusan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('lulus', 'Tahun Lulus:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('lulus', $riwayatPendidikan->lulus, ['class' => 'form-control', 'placeholder' => 'Tahun Lulus']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}