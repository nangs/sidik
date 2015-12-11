<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Alamat Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group @if ($errors->has('alamatCalonSiswa.jenis_tinggal')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[jenis_tinggal]', 'Jenis Tinggal:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('alamatCalonSiswa[jenis_tinggal]', App\AlamatCalonSiswa::jenisTinggalList(), $alamatCalonSiswa->jenis_tinggal, ['class' => 'form-control']) !!}
				@if ($errors->has('alamatCalonSiswa.jenis_tinggal')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.jenis_tinggal') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.alamat')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[alamat]', $alamatCalonSiswa->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
				@if ($errors->has('alamatCalonSiswa.alamat')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.alamat') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.rt')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[rt]', 'RT:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[rt]', $alamatCalonSiswa->rt, ['class' => 'form-control', 'placeholder' => 'RT']) !!}
				@if ($errors->has('alamatCalonSiswa.rt')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.rt') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.rw')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[rt]', 'RW:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[rw]', $alamatCalonSiswa->rw, ['class' => 'form-control', 'placeholder' => 'RW']) !!}
				@if ($errors->has('alamatCalonSiswa.rw')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.rw') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.kelurahan')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[kelurahan]', 'Kelurahan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kelurahan]', $alamatCalonSiswa->kelurahan, ['class' => 'form-control', 'placeholder' => 'Kelurahan']) !!}
				@if ($errors->has('alamatCalonSiswa.kelurahan')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.kelurahan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.kode_pos')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[kode_pos]', 'Kode Pos:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kode_pos]', $alamatCalonSiswa->kode_pos, ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
				@if ($errors->has('alamatCalonSiswa.kode_pos')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.kode_pos') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.kecamatan')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kecamatan]', $alamatCalonSiswa->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
				@if ($errors->has('alamatCalonSiswa.kecamatan')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.kecamatan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.kota')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[kota]', 'Kabupaten/Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kota]', $alamatCalonSiswa->kota, ['class' => 'form-control', 'placeholder' => 'Kabupaten/Kota']) !!}
				@if ($errors->has('alamatCalonSiswa.kota')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.kota') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.provinsi')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[provinsi]', 'Provinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[provinsi]', $alamatCalonSiswa->provinsi, ['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
				@if ($errors->has('alamatCalonSiswa.provinsi')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.provinsi') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.telepon_rumah')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[telepon_rumah]', 'Telepon Rumah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[telepon_rumah]', $alamatCalonSiswa->telepon_rumah, ['class' => 'form-control', 'placeholder' => 'Telepon Rumah']) !!}
				@if ($errors->has('alamatCalonSiswa.telepon_rumah')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.telepon_rumah') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.hp')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[telepon_rumah]', 'HP:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[hp]', $alamatCalonSiswa->hp, ['class' => 'form-control', 'placeholder' => 'HP']) !!}
				@if ($errors->has('alamatCalonSiswa.hp')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.hp') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.jarak_tempat_tinggal_ke_sekolah')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[jarak_tempat_tinggal_ke_sekolah]', 'Jarak Rumah ke Sekolah (km):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'alamatCalonSiswa[jarak_tempat_tinggal_ke_sekolah]', $alamatCalonSiswa->jarak_tempat_tinggal_ke_sekolah, ['class' => 'form-control']) !!}
				@if ($errors->has('alamatCalonSiswa.jarak_tempat_tinggal_ke_sekolah')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.jarak_tempat_tinggal_ke_sekolah') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.alat_transportasi_ke_sekolah')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[alat_transportasi_ke_sekolah]', 'Alat Transportasi ke Sekolah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('alamatCalonSiswa[alat_transportasi_ke_sekolah]', App\AlamatCalonSiswa::transportasiList(), $alamatCalonSiswa->alat_transportasi_ke_sekolah, ['class' => 'form-control']) !!}
				@if ($errors->has('alamatCalonSiswa.alat_transportasi_ke_sekolah')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.alat_transportasi_ke_sekolah') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('alamatCalonSiswa.email')) has-error @endif">
			{!! Form::label('alamatCalonSiswa[email]', 'Email:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[email]', $alamatCalonSiswa->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				@if ($errors->has('alamatCalonSiswa.email')) <p class="help-block">{{ $errors->first('alamatCalonSiswa.email') }}</p> @endif
			</div>
		</div>
		
	</div>

</div>