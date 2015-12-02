{!! Form::model($riwayatPendidikan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $riwayatPendidikan->karyawan_id) !!}
	{!! Form::hidden('siswa_id', $riwayatPendidikan->siswa_id) !!}
	{!! Form::hidden('formal', $riwayatPendidikan->formal) !!}

	@if ($riwayatPendidikan->karyawan_id)

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $riwayatPendidikan->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>

	@endif

	@if ($riwayatPendidikan->siswa_id)

	<div class="form-group">
		{!! Form::label('siswa_id', 'Siswa:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('siswa', App\Siswa::lists('nama', 'id'), $riwayatPendidikan->siswa_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>

	@endif
	
	@if ($riwayatPendidikan->formal)

	<div class="form-group">
		{!! Form::label('jenjang', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenjang', App\RiwayatPendidikan::listJenjang(), $riwayatPendidikan->jenjang, ['class' => 'form-control']) !!}
		</div>
	</div>

	@endif

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

	@if ($riwayatPendidikan->formal)

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

	@endif

	<div class="form-group">
		{!! Form::label('masuk', 'Tahun Masuk:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('number', 'masuk', $riwayatPendidikan->masuk, ['class' => 'form-control', 'placeholder' => 'Tahun Masuk']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('lulus', 'Tahun Lulus:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('number', 'lulus', $riwayatPendidikan->lulus, ['class' => 'form-control', 'placeholder' => 'Tahun Lulus']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('lama', 'Masa Belajar:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('lama', $riwayatPendidikan->lama, ['class' => 'form-control', 'placeholder' => 'Masa Belajar']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('keterangan', 'Keterangan/Kompetensi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('keterangan', $riwayatPendidikan->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan', 'rows' => 3]) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}