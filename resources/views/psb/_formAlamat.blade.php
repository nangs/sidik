<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Alamat Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[jenis_tinggal]', 'Jenis Tinggal:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('alamatCalonSiswa[jenis_tinggal]', App\AlamatCalonSiswa::jenisTinggalList(), $alamatCalonSiswa->jenis_tinggal, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[alamat]', $alamatCalonSiswa->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[rt]', 'RT:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[rt]', $alamatCalonSiswa->rt, ['class' => 'form-control', 'placeholder' => 'RT']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[rt]', 'RW:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[rw]', $alamatCalonSiswa->rw, ['class' => 'form-control', 'placeholder' => 'RW']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[kelurahan]', 'Kelurahan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kelurahan]', $alamatCalonSiswa->kelurahan, ['class' => 'form-control', 'placeholder' => 'Kelurahan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[kode_pos]', 'Kode Pos:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kode_pos]', $alamatCalonSiswa->kode_pos, ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kecamatan]', $alamatCalonSiswa->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[kota]', 'Kabupaten/Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[kota]', $alamatCalonSiswa->kota, ['class' => 'form-control', 'placeholder' => 'Kabupaten/Kota']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[provinsi]', 'Provinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[provinsi]', $alamatCalonSiswa->provinsi, ['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[telepon_rumah]', 'Telepon Rumah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[telepon_rumah]', $alamatCalonSiswa->telepon_rumah, ['class' => 'form-control', 'placeholder' => 'Telepon Rumah']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[telepon_rumah]', 'HP:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[hp]', $alamatCalonSiswa->hp, ['class' => 'form-control', 'placeholder' => 'HP']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[jarak_tempat_tinggal_ke_sekolah]', 'Jarak Rumah ke Sekolah (km):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'alamatCalonSiswa[jarak_tempat_tinggal_ke_sekolah]', $alamatCalonSiswa->jarak_tempat_tinggal_ke_sekolah, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[alat_trasnportasi_ke_sekolah]', 'Alat Transportasi ke Sekolah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('alamatCalonSiswa[alat_trasnportasi_ke_sekolah]', App\AlamatCalonSiswa::transportasiList(), $alamatCalonSiswa->alat_trasnportasi_ke_sekolah, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('alamatCalonSiswa[email]', 'Email:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('alamatCalonSiswa[email]', $alamatCalonSiswa->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
			</div>
		</div>
		
	</div>

</div>