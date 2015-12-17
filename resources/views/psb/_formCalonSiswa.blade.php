<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group @if ($errors->has('calonSiswa.nama')) has-error @endif">
			{!! Form::label('calonSiswa[nama]', 'Nama Lengkap:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nama]', $calonSiswa->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
				@if ($errors->has('calonSiswa.nama')) <p class="help-block">{{ $errors->first('calonSiswa.nama') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.jenis_kelamin')) has-error @endif">
			{!! Form::label('calonSiswa[jenis_kelamin]', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('calonSiswa[jenis_kelamin]', 1, $calonSiswa->jenis_kelamin ==  1) !!} Laki - Laki &nbsp; &nbsp;
				{!! Form::radio('calonSiswa[jenis_kelamin]', 0, $calonSiswa->jenis_kelamin ==  0) !!} Perempuan
			</div>
		</div>
		
		@if ($step == 2)
		<div class="form-group @if ($errors->has('calonSiswa.nisn')) has-error @endif">
			{!! Form::label('calonSiswa[nisn]', 'NISN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nisn]', $calonSiswa->nisn, ['class' => 'form-control', 'placeholder' => 'NISN']) !!}
				@if ($errors->has('calonSiswa.nisn')) <p class="help-block">{{ $errors->first('calonSiswa.nisn') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.nis')) has-error @endif">
			{!! Form::label('calonSiswa[nis]', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nis]', $calonSiswa->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
				@if ($errors->has('calonSiswa.nis')) <p class="help-block">{{ $errors->first('calonSiswa.nis') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.nik')) has-error @endif">
			{!! Form::label('calonSiswa[nik]', 'NIK:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nik]', $calonSiswa->nik, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}
				@if ($errors->has('calonSiswa.nik')) <p class="help-block">{{ $errors->first('calonSiswa.nik') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.tempat_lahir')) has-error @endif">
			{!! Form::label('calonSiswa[tempat_lahir]', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[tempat_lahir]', $calonSiswa->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
				@if ($errors->has('calonSiswa.tempat_lahir')) <p class="help-block">{{ $errors->first('calonSiswa.tempat_lahir') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.tanggal_lahir')) has-error @endif">
			{!! Form::label('calonSiswa[tanggal_lahir]', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[tanggal_lahir]', $calonSiswa->tgl_lahir, ['class' => 'form-control', 'id' => 'tgllahir']) !!}
				@if ($errors->has('calonSiswa.tanggal_lahir')) <p class="help-block">{{ $errors->first('calonSiswa.tanggal_lahir') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.tinggi_badan')) has-error @endif">
			{!! Form::label('calonSiswa[tinggi_badan]', 'Tinggi Badan (cm):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[tinggi_badan]', $calonSiswa->tinggi_badan, ['class' => 'form-control', 'placeholder' => 'Tinggi Badan (cm)']) !!}
				@if ($errors->has('calonSiswa.tinggi_badan')) <p class="help-block">{{ $errors->first('calonSiswa.tinggi_badan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.berat_badan')) has-error @endif">
			{!! Form::label('calonSiswa[berat_badan]', 'Berat Badan (kg):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[berat_badan]', $calonSiswa->berat, ['class' => 'form-control', 'placeholder' => 'Berat Badan (kg)']) !!}
				@if ($errors->has('calonSiswa.berat_badan')) <p class="help-block">{{ $errors->first('calonSiswa.berat_badan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.jumlah_saudara')) has-error @endif">
			{!! Form::label('calonSiswa[jumlah_saudara]', 'Jumlah Saudara:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[jumlah_saudara]', $calonSiswa->jumlah_saudara, ['class' => 'form-control', 'placeholder' => 'Jumlah Saudara']) !!}
				@if ($errors->has('calonSiswa.jumlah_saudara')) <p class="help-block">{{ $errors->first('calonSiswa.jumlah_saudara') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('calonSiswa.berkebutuhan_khusus')) has-error @endif">
			{!! Form::label('calonSiswa[berkebutuhan_khusus]', 'Berkebutuhan Khusus:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('calonSiswa[berkebutuhan_khusus]', App\CalonSiswa::kebutuhanKhususList(), $calonSiswa->berkebutuhan_khusus, ['class' => 'form-control']) !!}
				@if ($errors->has('calonSiswa.berkebutuhan_khusus')) <p class="help-block">{{ $errors->first('calonSiswa.berkebutuhan_khusus') }}</p> @endif
			</div>
		</div>
		@endif

		{!! Form::hidden('psb[tahun_ajaran]', App\Ta::active()->first()->periode) !!}

		<div class="form-group">
			{!! Form::label('tahun_ajaran', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('tahun_ajaran', App\Ta::active()->first()->periode, ['class' => 'form-control', 'disabled' => true]) !!}
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.jenjang')) has-error @endif">
			{!! Form::label('psb[jenjang]', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[jenjang]', App\Psb::jenjangList(), $psb->jenjang, ['class' => 'form-control', 'id' => 'jenjang']) !!}
				@if ($errors->has('psb.jenjang')) <p class="help-block">{{ $errors->first('psb.jenjang') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.tingkat')) has-error @endif">
			{!! Form::label('psb[tingkat]', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[tingkat]', App\Psb::tingkatList(), $psb->tingkat, ['class' => 'form-control', 'id' => 'tingkat']) !!}
				@if ($errors->has('psb.tingkat')) <p class="help-block">{{ $errors->first('psb.tingkat') }}</p> @endif
			</div>
		</div>

	</div>

</div>