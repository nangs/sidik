{!! Form::model($jadwalPelajaran, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ta_id', App\Ta::lists('periode', 'id'), $jadwalPelajaran->ta_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenjang_id', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenjang_id', 
			[null => '- Pilih Jenjang -'] + App\Jenjang::lists('nama', 'id')->toArray(), 
			$jadwalPelajaran->jenjang_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tingkat_id', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('tingkat_id', App\Tingkat::selectRaw('CONCAT(nama, " - ", keterangan) as nm, id')->lists('nm', 'id'), $jadwalPelajaran->tingkat_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kelas_id', 'Kelas:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('kelas_id', App\Kelas::lists('nama', 'id'), $jadwalPelajaran->kelas_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('hari', 'Hari:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('hari', App\JadwalPelajaran::hariList(), $jadwalPelajaran->hari, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jam_id', 'Jam Ke:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jam_id', 
			App\JamPelajaran::selectRaw('CONCAT(jam, " (", dari, " - ", sampai, ")") as jam, id')->lists('jam', 'id'), 
			$jadwalPelajaran->jam_id, ['class' => 'form-control', 'placeholder' => 'Jam Ke']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('mapel_id', 'Mata Pelajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('mapel_id', App\Mapel::lists('nama', 'id'), $jadwalPelajaran->mapel_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('guru_id', 'Guru:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('guru_id', App\Karyawan::where('guru', 1)->lists('nama', 'id'), $jadwalPelajaran->guru_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('ruang_id', 'Ruangan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ruang_id', App\Ruangan::selectRaw('CONCAT(kode, " - ", nama) as nama, id')->lists('nama', 'id'), $jadwalPelajaran->ruang_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('keterangan', 'Keterangan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('keterangan', $jadwalPelajaran->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
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
	$('select').select2();
</script>

@stop