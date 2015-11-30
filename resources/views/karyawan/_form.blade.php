{!! Form::model($karyawan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $karyawan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nik', 'NIK:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nik', $karyawan->nik, ['class' => 'form-control', 'placeholder' => 'NIK']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat_lahir', $karyawan->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tgl_lahir', $karyawan->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="jns_kelamin" value="1" {{ $karyawan->jns_kelamin ? 'checked' : '' }} /> Laki - Laki  <br />
			<input type="radio" name="jns_kelamin" value="0" {{ $karyawan->jns_kelamin ? '' : 'checked' }} /> Perempuan 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('gol_darah', 'Golongan Darah:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('gol_darah', App\Karyawan::golDarahList(), $karyawan->gol_darah, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nikah', 'Status Pernikahan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="nikah" value="1" {{ $karyawan->nikah ? 'checked' : '' }} /> Menikah  <br />
			<input type="radio" name="nikah" value="0" {{ $karyawan->nikah ? '' : 'checked' }} /> Belum Menikah 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jml_anak', 'Jumlah Anak:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jml_anak', $karyawan->jml_anak, ['class' => 'form-control', 'placeholder' => 'Jumlah Anak']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kota_asal', 'Kota Asal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kota_asal', $karyawan->kota_asal, ['class' => 'form-control', 'placeholder' => 'Kota Asal']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::textarea('alamat', $karyawan->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat', 'rows' => 3]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Telepon/HP:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $karyawan->phone, ['class' => 'form-control', 'placeholder' => 'Telepon']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $karyawan->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('golongan', 'Golongan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('golongan', App\Karyawan::golonganList(), $karyawan->golongan, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('guru', 'Status Pernikahan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="guru" value="1" {{ $karyawan->guru ? 'checked' : '' }} /> Ya  <br />
			<input type="radio" name="guru" value="0" {{ $karyawan->guru ? '' : 'checked' }} /> Tidak 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('mapel', 'Mata Pelajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('mapel[]', App\Mapel::lists('nama', 'id'), $karyawan->mapels()->lists('mapel_id')->toArray(), ['class' => 'form-control', 'multiple' => true, 'id' => 'mapel']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('img', 'Foto:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::file('img') !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}

@section('css')
<link href="/select2/dist/css/select2.min.css" rel="stylesheet">
@stop

@section('script')

<script type="text/javascript" src="/select2/dist/js/select2.min.js"></script>

<script type="text/javascript">
	$('#mapel').select2();
</script>

@stop