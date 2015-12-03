{!! Form::model($jadwalPelajaran, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('ta', $kelas->ta->periode, ['class' => 'form-control', 'disabled' => true]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tingkat_id', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tingkat', $kelas->tingkat->nama.' - '.$kelas->tingkat->keterangan, ['class' => 'form-control', 'disabled' => true]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kelas_id', 'Kelas:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kelas', $kelas->nama, ['class' => 'form-control', 'disabled' => true]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('hari', 'Hari:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('hari', App\JadwalPelajaran::hariList(), $jadwalPelajaran->hari, ['class' => 'form-control']) !!}
		</div>
	</div>

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Jam</th>
				<th>Mata Pelajaran</th>
				<th>Guru</th>
				<th>Ruangan</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kelas->jadwalPelajarans as $jadwalPelajaran)
			<tr>
				<td>
					{!! Form::hidden('jam_id['.$jadwalPelajaran->jam_id.']', $jadwalPelajaran->jam_id) !!}
					{!! Form::text('jam', $jadwalPelajaran->jam->jam.' ('.$jadwalPelajaran->jam->dari.' - '.$jadwalPelajaran->jam->sampai.')', ['class' => 'form-control', 'disabled' => true]) !!}
				</td>
				<td>
					{!! Form::select('mapel_id['.$jadwalPelajaran->jam_id.']', [null => '--Pilih Mata Pelajaran--'] + App\Mapel::lists('nama', 'id')->toArray(), $jadwalPelajaran->mapel_id, ['class' => 'form-control']) !!}
				</td>
				<td>
					{!! Form::select('guru_id['.$jadwalPelajaran->jam_id.']', App\Karyawan::where('guru', 1)->lists('nama', 'id'), $jadwalPelajaran->guru_id, ['class' => 'form-control']) !!}
				</td>
				<td>
					{!! Form::select('ruang_id['.$jadwalPelajaran->jam_id.']', App\Ruangan::selectRaw('CONCAT(kode, " - ", nama) as nama, id')->lists('nama', 'id'), $jadwalPelajaran->ruang_id, ['class' => 'form-control']) !!}
				</td>
				<td>
					{!! Form::text('keterangan['.$jadwalPelajaran->jam_id.']', $jadwalPelajaran->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

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
	// $('select').select2();
</script>

@stop