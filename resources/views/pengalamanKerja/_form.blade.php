{!! Form::model($pengalamanKerja, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $pengalamanKerja->karyawan_id) !!}

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $pengalamanKerja->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('institusi', 'Instansi/Perusahaan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('institusi', $pengalamanKerja->institusi, ['class' => 'form-control', 'placeholder' => 'Instansi/Perusahaan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('dari', 'Dari:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'dari', $pengalamanKerja->dari, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sampai', 'Sampai:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'sampai', $pengalamanKerja->sampai, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jabatan', 'Jabatan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jabatan', $pengalamanKerja->jabatan, ['class' => 'form-control', 'placeholder' => 'Jabatan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tugas', 'Tugas/Tanggung Jawab:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('tugas', $pengalamanKerja->tugas, ['class' => 'form-control', 'placeholder' => 'Tugas/Tanggung Jawab', 'rows' => 5]) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}