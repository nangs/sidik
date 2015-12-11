<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('calonSiswa[nama]', 'Nama Lengkap:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nama]', $calonSiswa->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[jenis_kelamin]', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('calonSiswa[jenis_kelamin]', 1, $calonSiswa->jenis_kelamin ==  1) !!} Laki - Laki &nbsp; &nbsp;
				{!! Form::radio('calonSiswa[jenis_kelamin]', 0, $calonSiswa->jenis_kelamin ==  0) !!} Perempuan
			</div>
		</div>
		
		<div class="form-group">
			{!! Form::label('calonSiswa[nisn]', 'NISN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nisn]', $calonSiswa->nisn, ['class' => 'form-control', 'placeholder' => 'NISN']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[nis]', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nis]', $calonSiswa->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[nik]', 'NIK:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[nik]', $calonSiswa->nik, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[tempat_lahir]', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[tempat_lahir]', $calonSiswa->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[tanggal_lahir]', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('calonSiswa[tanggal_lahir]', $calonSiswa->tgl_lahir, ['class' => 'form-control', 'id' => 'tgllahir']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[tinggi_badan]', 'Tinggi Badan (cm):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[tinggi_badan]', $calonSiswa->tinggi_badan, ['class' => 'form-control', 'placeholder' => 'Tinggi Badan (cm)']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[berat_badan]', 'Berat Badan (kg):', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[berat_badan]', $calonSiswa->berat, ['class' => 'form-control', 'placeholder' => 'Berat Badan (kg)']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[jumlah_saudara]', 'Jumlah Saudara:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'calonSiswa[jumlah_saudara]', $calonSiswa->jumlah_saudara, ['class' => 'form-control', 'placeholder' => 'Jumlah Saudara']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('calonSiswa[berkebutuhan_khusus]', 'Berkebutuhan Khusus:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('calonSiswa[berkebutuhan_khusus]', App\CalonSiswa::kebutuhanKhususList(), $calonSiswa->berkebutuhan_khusus, ['class' => 'form-control']) !!}
			</div>
		</div>

	</div>

</div>