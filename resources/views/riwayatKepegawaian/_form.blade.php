{!! Form::model($riwayatKepegawaian, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}
	
	{!! Form::hidden('karyawan_id', $riwayatKepegawaian->karyawan_id) !!}

	<div class="form-group">
		{!! Form::label('karyawan_id', 'Karyawan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('karyawan', App\Karyawan::lists('nama', 'id'), $riwayatKepegawaian->karyawan_id, ['class' => 'form-control', 'disabled' => true]) !!}	
		</div>
	</div>
	
	<div class="form-group">
		{!! Form::label('jenis', 'Jenis:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenis', App\RiwayatKepegawaian::jenisList(), $riwayatKepegawaian->jenis, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nomor_sk', 'Nomor SK:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nomor_sk', $riwayatKepegawaian->nomor_sk, ['class' => 'form-control', 'placeholder' => 'Nomor SK']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tanggal_sk', 'Tanggal SK:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'tanggal_sk', $riwayatKepegawaian->tanggal_sk, ['class' => 'form-control', 'placeholder' => 'Tanggal SK']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tmt', 'TMT:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'tmt', $riwayatKepegawaian->tmt, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('masa_kerja', 'Masa Kerja:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('masa_kerja', $riwayatKepegawaian->masa_kerja, ['class' => 'form-control', 'placeholder' => 'Masa Kerja']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('golongan', 'Golongan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('golongan', App\Karyawan::golonganList(), $riwayatKepegawaian->golongan, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('gapok', 'Gapok:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('number', 'gapok', $riwayatKepegawaian->gapok, ['class' => 'form-control', 'placeholder' => 'Gapok']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tempat', 'Penempatan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('tempat', $riwayatKepegawaian->tempat, ['class' => 'form-control', 'placeholder' => 'Penempatan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jabatan', 'Jabatan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jabatan', $riwayatKepegawaian->jabatan, ['class' => 'form-control', 'placeholder' => 'Jabatan']) !!}
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
	$('select[name=karyawan_id]').select2();
</script>

@stop