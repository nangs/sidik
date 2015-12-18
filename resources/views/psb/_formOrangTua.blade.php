<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data {{ $hubungan }} Calon Siswa</h3>
	</div>

	<div class="panel-body">

		@if ($hubungan == 'Wali')
		<div class="form-group">
			{!! Form::label('', 'Data Wali:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('datawali', 'Ayah', 0) !!} Sama Dengan Ayah &nbsp; &nbsp;
				{!! Form::radio('datawali', 'Ibu', 0) !!} Sama Dengan Ibu  &nbsp; &nbsp;
				{!! Form::radio('datawali', 'Wali', 0) !!} Berbeda dari Ayah & Ibu
			</div>
		</div>
		@endif

		{!! Form::hidden($hubungan.'[hubungan]', $hubungan) !!}

		<div class="form-group @if ($errors->has($hubungan.'.nama')) has-error @endif">
			{!! Form::label($hubungan.'[nama]', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[nama]', $$hubungan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
				@if ($errors->has($hubungan.'.nama')) <p class="help-block">{{ $errors->first($hubungan.'.nama') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.tahun_lahir')) has-error @endif">
			{!! Form::label($hubungan.'[tahun_lahir]', 'Tahun Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', $hubungan.'[tahun_lahir]', $$hubungan->tahun_lahir, ['class' => 'form-control', 'placeholder' => 'Tahun Lahir']) !!}
				@if ($errors->has($hubungan.'.tahun_lahir')) <p class="help-block">{{ $errors->first($hubungan.'.tahun_lahir') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.agama')) has-error @endif">
			{!! Form::label($hubungan.'[agama]', 'Agama:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[agama]', $$hubungan->agama, ['class' => 'form-control', 'readonly' => true]) !!}
				@if ($errors->has($hubungan.'.agama')) <p class="help-block">{{ $errors->first($hubungan.'.agama') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.pekerjaan')) has-error @endif">
			{!! Form::label($hubungan.'[pekerjaan]', 'Pekerjaan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[pekerjaan]', App\OrangTuaCalonSiswa::pekerjaanList(), $$hubungan->pekerjaan, ['class' => 'form-control']) !!}
				@if ($errors->has($hubungan.'.pekerjaan')) <p class="help-block">{{ $errors->first($hubungan.'.pekerjaan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.pendidikan')) has-error @endif">
			{!! Form::label($hubungan.'[pendidikan]', 'Pendidikan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[pendidikan]', App\OrangTuaCalonSiswa::pendidikanList(), $$hubungan->pendidikan, ['class' => 'form-control']) !!}
				@if ($errors->has($hubungan.'.pendidikan')) <p class="help-block">{{ $errors->first($hubungan.'.pendidikan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.penghasilan_bulanan')) has-error @endif">
			{!! Form::label($hubungan.'[penghasilan_bulanan]', 'Penghasilan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[penghasilan_bulanan]', App\OrangTuaCalonSiswa::penghasilanList(), $$hubungan->penghasilan_bulanan, ['class' => 'form-control']) !!}
				@if ($errors->has($hubungan.'.penghasilan_bulanan')) <p class="help-block">{{ $errors->first($hubungan.'.penghasilan_bulanan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.alamat')) has-error @endif">
			{!! Form::label($hubungan.'[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[alamat]', $$hubungan->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
				@if ($errors->has($hubungan.'.alamat')) <p class="help-block">{{ $errors->first($hubungan.'.alamat') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.rt')) has-error @endif">
			{!! Form::label($hubungan.'[rt]', 'RT:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[rt]', $$hubungan->rt, ['class' => 'form-control', 'placeholder' => 'RT']) !!}
				@if ($errors->has($hubungan.'.rt')) <p class="help-block">{{ $errors->first($hubungan.'.rt') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.rw')) has-error @endif">
			{!! Form::label($hubungan.'[rt]', 'RW:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[rw]', $$hubungan->rw, ['class' => 'form-control', 'placeholder' => 'RW']) !!}
				@if ($errors->has($hubungan.'.rw')) <p class="help-block">{{ $errors->first($hubungan.'.rw') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.kelurahan')) has-error @endif">
			{!! Form::label($hubungan.'[kelurahan]', 'Kelurahan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kelurahan]', $$hubungan->kelurahan, ['class' => 'form-control', 'placeholder' => 'Kelurahan']) !!}
				@if ($errors->has($hubungan.'.kelurahan')) <p class="help-block">{{ $errors->first($hubungan.'.kelurahan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.kode_pos')) has-error @endif">
			{!! Form::label($hubungan.'[kode_pos]', 'Kode Pos:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kode_pos]', $$hubungan->kode_pos, ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
				@if ($errors->has($hubungan.'.kode_pos')) <p class="help-block">{{ $errors->first($hubungan.'.kode_pos') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.kecamatan')) has-error @endif">
			{!! Form::label($hubungan.'[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kecamatan]', $$hubungan->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
				@if ($errors->has($hubungan.'.kecamatan')) <p class="help-block">{{ $errors->first($hubungan.'.kecamatan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.kota')) has-error @endif">
			{!! Form::label($hubungan.'[kota]', 'Kabupaten/Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kota]', $$hubungan->kota, ['class' => 'form-control', 'placeholder' => 'Kabupaten/Kota']) !!}
				@if ($errors->has($hubungan.'.kota')) <p class="help-block">{{ $errors->first($hubungan.'.kota') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.provinsi')) has-error @endif">
			{!! Form::label($hubungan.'[provinsi]', 'Provinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[provinsi]', $$hubungan->provinsi, ['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
				@if ($errors->has($hubungan.'.provinsi')) <p class="help-block">{{ $errors->first($hubungan.'.provinsi') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.telepon_rumah')) has-error @endif">
			{!! Form::label($hubungan.'[telepon_rumah]', 'Telepon Rumah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[telepon_rumah]', $$hubungan->telepon_rumah, ['class' => 'form-control', 'placeholder' => 'Telepon Rumah']) !!}
				@if ($errors->has($hubungan.'.telepon_rumah')) <p class="help-block">{{ $errors->first($hubungan.'.telepon_rumah') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.hp')) has-error @endif">
			{!! Form::label($hubungan.'[hp]', 'HP:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[hp]', $$hubungan->hp, ['class' => 'form-control', 'placeholder' => 'HP']) !!}
				@if ($errors->has($hubungan.'.hp')) <p class="help-block">{{ $errors->first($hubungan.'.hp') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has($hubungan.'.email')) has-error @endif">
			{!! Form::label($hubungan.'[email]', 'Email:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[email]', $$hubungan->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				@if ($errors->has($hubungan.'.email')) <p class="help-block">{{ $errors->first($hubungan.'.email') }}</p> @endif
			</div>
		</div>
		
	</div>

</div>