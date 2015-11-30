{!! Form::model($keluargaKaryawan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $keluargaKaryawan->karyawan_id) !!}

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $keluargaKaryawan->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $keluargaKaryawan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="jns_kelamin" value="1" {{ $keluargaKaryawan->jns_kelamin ? 'checked' : '' }} /> Laki - Laki  <br />
			<input type="radio" name="jns_kelamin" value="0" {{ $keluargaKaryawan->jns_kelamin ? '' : 'checked' }} /> Perempuan 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat_lahir', $keluargaKaryawan->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tgl_lahir', $keluargaKaryawan->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	
	<div class="form-group">
		{!! Form::label('hub_keluarga', 'Hub. Keluarga:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('hub_keluarga', App\KeluargaKaryawan::listHubungan(), $keluargaKaryawan->jenjang, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="status" value="1" {{ $keluargaKaryawan->status ? 'checked' : '' }} /> Hidup  <br />
			<input type="radio" name="status" value="0" {{ $keluargaKaryawan->status ? '' : 'checked' }} /> Meninggal 
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}