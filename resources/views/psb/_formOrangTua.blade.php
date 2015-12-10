<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data {{ $hubungan }} Calon Siswa</h3>
	</div>

	<div class="panel-body">

		{!! Form::hidden($hubungan.'[hubungan]', $hubungan) !!}

		<div class="form-group">
			{!! Form::label($hubungan.'[nama]', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[nama]', $$hubungan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[tahun_lahir]', 'Tahun Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', $hubungan.'[tahun_lahir]', $$hubungan->tahun_lahir, ['class' => 'form-control', 'placeholder' => 'Tahun Lahir']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[agama]', 'Agama:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[agama]', App\OrangTuaCalonSiswa::agamaList(), $$hubungan->agama, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[pekerjaan]', 'Pekerjaan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[pekerjaan]', App\OrangTuaCalonSiswa::pekerjaanList(), $$hubungan->pekerjaan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[pendidikan]', 'Pendidikan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[pendidikan]', App\OrangTuaCalonSiswa::pendidikanList(), $$hubungan->pendidikan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[penghasilan_bulanan]', 'Penghasilan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select($hubungan.'[penghasilan_bulanan]', App\OrangTuaCalonSiswa::penghasilanList(), $$hubungan->penghasilan_bulanan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[alamat]', $$hubungan->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[rt]', 'RT:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[rt]', $$hubungan->rt, ['class' => 'form-control', 'placeholder' => 'RT']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[rt]', 'RW:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[rw]', $$hubungan->rw, ['class' => 'form-control', 'placeholder' => 'RW']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[kelurahan]', 'Kelurahan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kelurahan]', $$hubungan->kelurahan, ['class' => 'form-control', 'placeholder' => 'Kelurahan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[kode_pos]', 'Kode Pos:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kode_pos]', $$hubungan->kode_pos, ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kecamatan]', $$hubungan->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[kota]', 'Kabupaten/Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[kota]', $$hubungan->kota, ['class' => 'form-control', 'placeholder' => 'Kabupaten/Kota']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[provinsi]', 'Provinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[provinsi]', $$hubungan->provinsi, ['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[telepon_rumah]', 'Telepon Rumah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[telepon_rumah]', $$hubungan->telepon_rumah, ['class' => 'form-control', 'placeholder' => 'Telepon Rumah']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[hp]', 'HP:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[hp]', $$hubungan->hp, ['class' => 'form-control', 'placeholder' => 'HP']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label($hubungan.'[email]', 'Email:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text($hubungan.'[email]', $$hubungan->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
			</div>
		</div>
		
	</div>

</div>