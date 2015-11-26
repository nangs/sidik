{!! Form::model($wali, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $wali->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('alamat', $wali->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Telepon:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $wali->phone, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $wali->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jns_kelamin', [0 => 'Perempuan', 1 => 'Laki - Laki'], $wali->jns_kelamin, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('hub_keluarga', 'Hub. Keluarga:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('hub_keluarga', $wali->hub_keluarga, ['class' => 'form-control', 'placeholder' => 'Hubungan Keluarga']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}