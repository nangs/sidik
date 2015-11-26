{!! Form::model($karyawan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $karyawan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nik', 'NIK:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nik', $karyawan->nik, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kota_asal', 'Kota Asal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kota_asal', $karyawan->kota_asal, ['class' => 'form-control', 'placeholder' => 'Kota Asal']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('alamat', $karyawan->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Telepon:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $karyawan->phone, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $karyawan->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jns_kelamin', [0 => 'Perempuan', 1 => 'Laki - Laki'], $karyawan->jns_kelamin, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat_lahir', $karyawan->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tgl_lahir', $karyawan->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}