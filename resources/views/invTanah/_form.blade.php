{!! Form::model($invTanah, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('kode', 'Kode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kode', $invTanah->kode, ['class' => 'form-control', 'placeholder' => 'Kode']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $invTanah->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Luas (m<sup>2</sup>):</label>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('luas_total', $invTanah->luas_total, ['class' => 'form-control', 'placeholder' => 'Luas Total']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('luas_bangunan', $invTanah->luas_bangunan, ['class' => 'form-control', 'placeholder' => 'Luas Bangunan']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('luas_kosong', $invTanah->luas_kosong, ['class' => 'form-control', 'placeholder' => 'Luas Kosong']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('lokasi', 'Lokasi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('lokasi', $invTanah->lokasi, ['class' => 'form-control', 'placeholder' => 'Lokasi']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('batas_utara', 'Batas:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
					{!! Form::text('batas_utara', $invTanah->batas_utara, ['class' => 'form-control', 'placeholder' => 'Utara']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::text('batas_selatan', $invTanah->batas_selatan, ['class' => 'form-control', 'placeholder' => 'Selatan']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::text('batas_barat', $invTanah->batas_barat, ['class' => 'form-control', 'placeholder' => 'Barat']) !!}
				</div>
				<div class="col-md-3">
					{!! Form::text('batas_timur', $invTanah->batas_timur, ['class' => 'form-control', 'placeholder' => 'Timur']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sertifikat_nomor', 'Sertifikat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('sertifikat_nomor', $invTanah->sertifikat_nomor, ['class' => 'form-control', 'placeholder' => 'Nomor']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('sertifikat_tgl', $invTanah->sertifikat_tgl, ['class' => 'form-control', 'placeholder' => 'Tanggal (yyyy-mm-dd)']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('sertifikat_hak', $invTanah->sertifikat_hak, ['class' => 'form-control', 'placeholder' => 'Hak']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('asal_dana', 'Asal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					{!! Form::text('asal_perolehan', $invTanah->asal_perolehan, ['class' => 'form-control', 'placeholder' => 'Asal Perolehan']) !!}
				</div>
				<div class="col-md-6">
					{!! Form::text('asal_dana', $invTanah->asal_dana, ['class' => 'form-control', 'placeholder' => 'Asal Dana']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('njop', 'NJOP:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('njop', $invTanah->njop, ['class' => 'form-control', 'placeholder' => 'NJOP']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_dapat', 'Tanggal Dapat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tgl_dapat', $invTanah->tgl_dapat, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nilai_asset', 'Nilai Asset (Rp):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nilai_asset', $invTanah->nilai_asset, ['class' => 'form-control', 'placeholder' => 'Nilai Asset']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}