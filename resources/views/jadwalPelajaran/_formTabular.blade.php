{!! Form::model($jadwalPelajaran, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('ta', $kelas->ta->periode, ['class' => 'form-control', 'disabled' => true]) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenjang_id', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jenjang', $kelas->jenjang->nama, ['class' => 'form-control', 'disabled' => true]) !!}
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
			{!! Form::hidden('hari', Request::get('hari')) !!}
			{!! Form::select('hr', App\JadwalPelajaran::hariList(), Request::get('hari'), ['class' => 'form-control', 'disabled' => true]) !!}
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
			@if ($method == 'POST')

				@foreach($kelas->tingkat->jamPelajarans as $jam)
				<tr>
					<td>
						{!! Form::hidden('jam_id['.$jam->id.']', $jam->id) !!}
						{!! Form::text('jam', $jam->jam.' ('.$jam->dari.' - '.$jam->sampai.')', ['class' => 'form-control', 'disabled' => true]) !!}
					</td>
					<td>
						{!! Form::select('mapel_id['.$jam->id.']', [null => '- Pilih Mata Pelajaran -'] + App\Mapel::lists('nama', 'id')->toArray(), $jadwalPelajaran->mapel_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::select('guru_id['.$jam->id.']', [null => '- Pilih Guru -'] + App\Karyawan::where('guru', 1)->lists('nama', 'id')->toArray(), $jadwalPelajaran->guru_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::select('ruang_id['.$jam->id.']', [null => '- Pilih Ruangan -'] + App\Ruangan::selectRaw('CONCAT(kode, " - ", nama) as nama, id')->lists('nama', 'id')->toArray(), $jadwalPelajaran->ruang_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::text('keterangan['.$jam->id.']', $jadwalPelajaran->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
					</td>
				</tr>
				@endforeach

			@else

				@foreach($kelas->jadwalPelajarans()->where('hari', Request::get('hari'))->get() as $jadwalPelajaran)
				<tr>
					<td>
						{!! Form::hidden('jam_id['.$jadwalPelajaran->jam_id.']', $jadwalPelajaran->jam_id) !!}
						{!! Form::text('jam', $jadwalPelajaran->jam->jam.' ('.$jadwalPelajaran->jam->dari.' - '.$jadwalPelajaran->jam->sampai.')', ['class' => 'form-control', 'disabled' => true]) !!}
					</td>
					<td>
						{!! Form::select('mapel_id['.$jadwalPelajaran->jam_id.']', [null => '--Pilih Mata Pelajaran--'] + App\Mapel::lists('nama', 'id')->toArray(), $jadwalPelajaran->mapel_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::select('guru_id['.$jadwalPelajaran->jam_id.']', [null => '- Pilih Guru -'] + App\Karyawan::where('guru', 1)->lists('nama', 'id')->toArray(), $jadwalPelajaran->guru_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::select('ruang_id['.$jadwalPelajaran->jam_id.']', [null => '- Pilih Ruangan -'] + App\Ruangan::selectRaw('CONCAT(kode, " - ", nama) as nama, id')->lists('nama', 'id')->toArray(), $jadwalPelajaran->ruang_id, ['class' => 'form-control']) !!}
					</td>
					<td>
						{!! Form::text('keterangan['.$jadwalPelajaran->jam_id.']', $jadwalPelajaran->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
					</td>
				</tr>
				@endforeach

			@endif
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