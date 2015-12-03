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
			{!! Form::email('email', $wali->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat_lahir', $wali->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'tgl_lahir', $wali->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('wn', 'Kewarganegaraan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('wn', 'WNI', $wali->wn ==  'WNI') !!} WNI<br />
			{!! Form::radio('wn', 'WNA', $wali->wn ==  'WNA') !!} WNA
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('agama', 'Agama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('agama', App\Karyawan::agamaList(), $wali->agama, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('pendidikan_terakhir', 'Pendidikan Terakhir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('pendidikan_terakhir', $wali->pendidikan_terakhir, ['class' => 'form-control', 'placeholder' => 'Pendidikan Terakhir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('pekerjaan', 'Pekerjaan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('pekerjaan', $wali->pekerjaan, ['class' => 'form-control', 'placeholder' => 'Pekerjaan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('penghasilan', 'Penghasilan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('penghasilan', $wali->penghasilan, ['class' => 'form-control', 'placeholder' => 'Penghasilan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('jns_kelamin', 1, $wali->jns_kelamin ==  1) !!} Laki - Laki<br />
			{!! Form::radio('jns_kelamin', 0, $wali->jns_kelamin ==  0) !!} Perempuan 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('hub_keluarga', 'Hub. Keluarga:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('hub_keluarga', $wali->hub_keluarga, ['class' => 'form-control', 'placeholder' => 'Hubungan Keluarga']) !!}
		</div>
	</div>

	<!-- <div class="form-group">
		{!! Form::label('is_wali', 'Sebagai Wali:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('is_wali', 1, $wali->is_wali ==  1) !!} Ya<br />
			{!! Form::radio('is_wali', 0, $wali->is_wali ==  0) !!} Tidak
		</div>
	</div> -->

	<div class="form-group">
		{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('status', 1, $wali->status ==  1) !!} Hidup<br />
			{!! Form::radio('status', 0, $wali->status ==  0) !!} Meninggal
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}