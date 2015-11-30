{!! Form::model($riwayatMengajar, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $riwayatMengajar->karyawan_id) !!}

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $riwayatMengajar->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('mapel', 'Mata Pelajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('mapel', $riwayatMengajar->mapel, ['class' => 'form-control', 'placeholder' => 'Mata Pelajaran']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tingkat', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tingkat', $riwayatMengajar->tingkat, ['class' => 'form-control', 'placeholder' => 'Tingkat']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('institusi', 'Sekolah/Institusi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('institusi', $riwayatMengajar->institusi, ['class' => 'form-control', 'placeholder' => 'Sekolah/Institusi']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('dari', 'Dari Tahun:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('dari', $riwayatMengajar->dari, ['class' => 'form-control', 'placeholder' => 'Dari Tahun']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sampai', 'Sampai Tahun:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('sampai', $riwayatMengajar->sampai, ['class' => 'form-control', 'placeholder' => 'Sampai Tahun']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('durasi', 'Durasi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('durasi', $riwayatMengajar->durasi, ['class' => 'form-control', 'placeholder' => 'Durasi']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('keterangan', 'Keterangan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('keterangan', $riwayatMengajar->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}