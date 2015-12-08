<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data {{ $hubungan }} Calon Siswa</h3>
	</div>

	<div class="panel-body">

		{!! Form::hidden('hubungan', {{ $hubungan }}) !!}

		<div class="form-group">
			{!! Form::label('ortu[nama]', 'Nama:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[nama]', $ortu->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[tahun_lahir]', 'Tahun Lahir:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::input('number', 'ortu[tahun_lahir]', $ortu->tahun_lahir, ['class' => 'form-control', 'placeholder' => 'Tahun Lahir']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[agama]', 'Agama:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::select('ortu[agama]', App\OrangTuaCalonSiswa::agamaList(), $ortu->agama, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[pekerjaan]', 'Pekerjaan:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::select('ortu[pekerjaan]', App\OrangTuaCalonSiswa::pekerjaanList(), $ortu->pekerjaan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[pendidikan]', 'Pendidikan:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::select('ortu[pendidikan]', App\OrangTuaCalonSiswa::pendidikanList(), $ortu->pendidikan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[penghasilan]', 'Penghasilan:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::select('ortu[penghasilan]', App\OrangTuaCalonSiswa::penghasilanList(), $ortu->penghasilan, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[alamat]', 'Alamat:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[alamat]', $ortu->ortu[alamat], ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[rt]', 'RT/RW:', ['class' => 'col-md-4 control-label']) !!}
			<div class="row">
				<div class="col-md-6">
					{!! Form::text('ortu[rt]', $ortu->rt], ['class' => 'form-control', 'placeholder' => 'RT']) !!}
				</div>

				<div class="col-md-6">
					{!! Form::text('ortu[rw]', $ortu->rw], ['class' => 'form-control', 'placeholder' => 'RW']) !!}
				</div>
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[kelurahan]', 'Kelurahan:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[kelurahan]', $ortu->ortu[kelurahan], ['class' => 'form-control', 'placeholder' => 'Kelurahan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[kode_pos]', 'Kode Pos:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[kode_pos]', $ortu->ortu[kode_pos], ['class' => 'form-control', 'placeholder' => 'Kode Pos']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[kecamatan]', 'Kecamatan:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[kecamatan]', $ortu->ortu[kecamatan], ['class' => 'form-control', 'placeholder' => 'kecamatan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[kota]', 'Kabupaten/Kota:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[kota]', $ortu->ortu[kota], ['class' => 'form-control', 'placeholder' => 'Kabupaten/Kota']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[provinsi]', 'Provinsi:', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('ortu[provinsi]', $ortu->ortu[provinsi], ['class' => 'form-control', 'placeholder' => 'Provinsi']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ortu[telepon_rumah]', 'Telepon Rumah/HP:', ['class' => 'col-md-4 control-label']) !!}
			<div class="row">
				<div class="col-md-6">
					{!! Form::text('ortu[telepon_rumah]', $ortu->telepon_rumah], ['class' => 'form-control', 'placeholder' => 'Telepon Rumah']) !!}
				</div>

				<div class="col-md-6">
					{!! Form::text('ortu[hp]', $ortu->hp], ['class' => 'form-control', 'placeholder' => 'HP']) !!}
				</div>
			</div>
		</div>
		
	</div>

</div>