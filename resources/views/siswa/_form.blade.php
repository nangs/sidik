{!! Form::model($siswa, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('nis', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nis', $siswa->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nisn', 'NISN:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nisn', $siswa->nisn, ['class' => 'form-control', 'placeholder' => 'NISN']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama Lengkap:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $siswa->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('panggilan', 'Nama Panggilan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('panggilan', $siswa->panggilan, ['class' => 'form-control', 'placeholder' => 'Nama Panggilan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat_lahir', 'Tempat Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat_lahir', $siswa->tempat_lahir, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tgl_lahir', 'Tanggal Lahir:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tgl_lahir', $siswa->tgl_lahir, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="jns_kelamin" value="1" {{ $siswa->jns_kelamin ? 'checked' : '' }} /> Laki - Laki  <br />
			<input type="radio" name="jns_kelamin" value="0" {{ $siswa->jns_kelamin ? '' : 'checked' }} /> Perempuan 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('img', 'Foto:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::file('img') !!}	
		</div>
	</div>

	<h3 class="text-muted">Kewarganegaraan</h3><hr />

	<div class="form-group">
		{!! Form::label('wn', 'Kewarganegaraan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="wn" value="WNI" {{ $siswa->wn == 'WNI' ? 'checked' : '' }} /> WNI  <br />
			<input type="radio" name="wn" value="WNA" {{ $siswa->wn == 'WNA' ? 'checked' : '' }} /> WNA 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('suku', 'Suku:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('suku', $siswa->suku, ['class' => 'form-control', 'placeholder' => 'Suku']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('bahasa', 'Bahasa Sehari-hari:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('bahasa', $siswa->bahasa, ['class' => 'form-control', 'placeholder' => 'Bahasa Sehari-hari']) !!}
		</div>
	</div>

	<h3 class="text-muted">Data Keluarga</h3><hr />

	<div class="form-group">
		{!! Form::label('status_anak', 'Status Anak:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<input type="radio" name="status_anak" value="Kandung" {{ $siswa->status_anak == 'Kandung' ? 'checked' : '' }} /> Kandung  <br />
			<input type="radio" name="status_anak" value="Tiri" {{ $siswa->status_anak == 'Tiri' ? 'checked' : '' }} /> Tiri <br />
			<input type="radio" name="status_anak" value="Angkat" {{ $siswa->status_anak == 'Angkat' ? 'checked' : '' }} /> Angkat 
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('anak_ke', 'Anak Ke:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('anak_ke', $siswa->anak_ke, ['class' => 'form-control', 'placeholder' => 'Anak Ke']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sdr_kandung', 'Jumlah Saudara:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					{!! Form::text('sdr_kandung', $siswa->sdr_kandung, ['class' => 'form-control', 'placeholder' => 'Kandung']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('sdr_tiri', $siswa->sdr_tiri, ['class' => 'form-control', 'placeholder' => 'Tiri']) !!}
				</div>
				<div class="col-md-4">
					{!! Form::text('sdr_angkat', $siswa->sdr_angkat, ['class' => 'form-control', 'placeholder' => 'Angkat']) !!}
				</div>
			</div>
		</div>
	</div>

	<h3 class="text-muted">Orang Tua/Wali</h3><hr />

	<div class="form-group">
		{!! Form::label('wali_id', 'Wali:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('wali_id', App\Wali::lists('nama', 'id'), $siswa->wali_id, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<h3 class="text-muted">Alamat</h3><hr />
	
	<div class="form-group">
		{!! Form::label('alamat', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('alamat', $siswa->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('alamat_kos', 'Alamat Kos:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('alamat_kos', $siswa->alamat_kos, ['class' => 'form-control', 'placeholder' => 'Alamat Kos']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tinggal_dengan', 'Tinggal Dengan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tinggal_dengan', $siswa->tinggal_dengan, ['class' => 'form-control', 'placeholder' => 'Tinggal Dengan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('phone', 'Telepon/HP:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('phone', $siswa->phone, ['class' => 'form-control', 'placeholder' => 'Telepon/HP']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jarak_ke_sekolah', 'Jarak Ke Sekolah (km):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jarak_ke_sekolah', $siswa->jarak_ke_sekolah, ['class' => 'form-control', 'placeholder' => 'Jarak Ke Sekolah']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('transportasi', 'Transortasi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('transportasi', $siswa->transportasi, ['class' => 'form-control', 'placeholder' => 'Transortasi']) !!}
		</div>
	</div>

	<h3 class="text-muted">Jasmani & Kesehatan</h3><hr />

	<div class="form-group">
		{!! Form::label('gol_darah', 'Golongan Darah:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('gol_darah', App\Karyawan::golDarahList(), $siswa->gol_darah, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tinggi', 'Tinggi (cm):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tinggi', $siswa->tinggi, ['class' => 'form-control', 'placeholder' => 'Tinggi (cm)']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('berat', 'Berat (kg):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('berat', $siswa->berat, ['class' => 'form-control', 'placeholder' => 'Berat (kg)']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('riwayat_penyakit', 'Riwayat Penyakit:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('riwayat_penyakit', $siswa->riwayat_penyakit, ['class' => 'form-control', 'placeholder' => 'Riwayat Penyakit']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kelainan', 'Kelainan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kelainan', $siswa->kelainan, ['class' => 'form-control', 'placeholder' => 'Kelainan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('hobby', 'Hobby:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('hobby', $siswa->hobby, ['class' => 'form-control', 'placeholder' => 'Hobby']) !!}
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
	$('select[name=wali_id]').select2();
</script>

@stop