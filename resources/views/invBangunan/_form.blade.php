{!! Form::model($invBangunan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('tanah_id', 'Tanah:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('tanah_id', App\InvTanah::lists('nama', 'id'), $invBangunan->tanah_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kode', 'Kode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kode', $invBangunan->kode, ['class' => 'form-control', 'placeholder' => 'Kode']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $invBangunan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Luas (m<sup>2</sup>):</label>
		<div class="col-md-10">
			{!! Form::text('luas', $invBangunan->luas, ['class' => 'form-control', 'placeholder' => 'Luas']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('alamat', $invBangunan->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
		</div>
	</div>

 	<div class="form-group">
		{!! Form::label('tahun', 'Tahun:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('tahun_pembangunan', $invBangunan->tahun_pembangunan, ['class' => 'form-control', 'placeholder' => 'Pembangunan']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('tahun_selesai', $invBangunan->tahun_selesai, ['class' => 'form-control', 'placeholder' => 'Selesai']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('tahun_pakai', $invBangunan->tahun_pakai, ['class' => 'form-control', 'placeholder' => 'Pakai']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('imb', 'Nomor/Tanggal IMB:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-6">
					{!! Form::text('nomor_imb', $invBangunan->nomor_imb, ['class' => 'form-control', 'placeholder' => 'Nomor IMB']) !!}
				</div>
				<div class="col-md-6">
					{!! Form::text('tgl_imb', $invBangunan->tgl_imb, ['class' => 'form-control', 'placeholder' => 'Tanggal IMB']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('asal_dana', 'Asal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('asal_perolehan', $invBangunan->asal_perolehan, ['class' => 'form-control', 'placeholder' => 'Asal Perolehan']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('asal_dana', $invBangunan->asal_dana, ['class' => 'form-control', 'placeholder' => 'Asal Dana']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('nomor_bukti_perolehan', $invBangunan->nomor_bukti_perolehan, ['class' => 'form-control', 'placeholder' => 'Nomor Bukti Perolehan']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('rekanan', 'Rekanan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('rekanan', $invBangunan->rekanan, ['class' => 'form-control', 'placeholder' => 'Rekanan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kondisi', 'Kondisi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('kondisi', App\InvBangunan::kondisiList(), $invBangunan->kondisi, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jumlah_lantai', 'Jumlah Lantai:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jumlah_lantai', $invBangunan->jumlah_lantai, ['class' => 'form-control', 'placeholder' => 'Jumlah Lantai']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('material', 'Material:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('material_lantai', $invBangunan->material_lantai, ['class' => 'form-control', 'placeholder' => 'Material Lantai']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('material_tembok', $invBangunan->material_tembok, ['class' => 'form-control', 'placeholder' => 'Material Tembok']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('material_atap', $invBangunan->material_atap, ['class' => 'form-control', 'placeholder' => 'Material Atap']) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nilai_asset', 'Nilai Asset (Rp):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nilai_asset', $invBangunan->nilai_asset, ['class' => 'form-control', 'placeholder' => 'Nilai Asset']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}