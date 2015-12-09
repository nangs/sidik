<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('calon_siswa[nama]', 'Nama Lengkap:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calon_siswa[nama]', $calonSiswa->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[jenis_kelamin]', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('calon_siswa[jenis_kelamin]', 1, $calonSiswa->jns_kelamin ==  1) !!} Laki - Laki &nbsp; &nbsp;
				{!! Form::radio('calon_siswa[jenis_kelamin]', 0, $calonSiswa->jns_kelamin ==  0) !!} Perempuan
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[nisn]', 'NISN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calon_siswa[nisn]', $calonSiswa->nisn, ['class' => 'form-control', 'placeholder' => 'NISN']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[nis]', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calon_siswa[nis]', $calonSiswa->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[nik]', 'NIK:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calon_siswa[nik]', $calonSiswa->nik, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[tempat_lahir]', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calon_siswa[tempat_lahir]', $calonSiswa->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[tanggal_lahir]', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('date', 'calon_siswa[tanggal_lahir]', $calonSiswa->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[tinggi_badan]', 'Tinggi Badan (cm):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calon_siswa[tinggi_badan]', $calonSiswa->tinggi_badan, ['class' => 'form-control', 'placeholder' => 'Tinggi Badan (cm)']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[berat_badan]', 'Berat Badan (kg):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calon_siswa[berat_badan]', $calonSiswa->berat, ['class' => 'form-control', 'placeholder' => 'Berat Badan (kg)']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[jumlah_saudara]', 'Jumlah Saudara:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calon_siswa[jumlah_saudara]', $calonSiswa->jumlah_saudara, ['class' => 'form-control', 'placeholder' => 'Jumlah Saudara']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calon_siswa[berkebutuhan_khusus]', 'Berkebutuhan Khusus:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('calon_siswa[berkebutuhan_khusus]', App\CalonSiswa::kebutuhanKhususList(), $calonSiswa->berkebutuhan_khusus, ['class' => 'form-control']) !!}
			</div>
		</div>

	</div>

</div>