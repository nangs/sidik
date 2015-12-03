{!! Form::model($tagihan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('siswa_id', 'Siswa:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('siswa_id', App\Siswa::lists('nama', 'id'), $tagihan->siswa_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ta_id', App\Ta::lists('periode', 'id'), $tagihan->ta_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('semester', 'Semester:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('semester', 1, $tagihan->semester ==  1) !!} 1<br />
			{!! Form::radio('semester', 2, $tagihan->semester ==  2) !!} 2
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('bulan', 'Bulan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::selectMonth('bulan', $tagihan->bulan, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nomor', 'Nomor:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nomor', $tagihan->nomor, ['class' => 'form-control', 'placeholder' => 'Nomor']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenis', 'Jenis:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('jenis', $tagihan->jenis, ['class' => 'form-control', 'placeholder' => 'Jenis']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jumlah', 'Jumlah:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('number', 'jumlah', $tagihan->jumlah, ['class' => 'form-control', 'placeholder' => 'Jumlah']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jatuh_tempo', 'Jatuh Tempo:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'jatuh_tempo', $tagihan->jatuh_tempo, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tanggal_bayar', 'Tanggal Bayar:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('date', 'tanggal_bayar', $tagihan->tanggal_bayar, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('status', 'Status:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::radio('status', 1, $tagihan->status ==  1) !!} Lunas<br />
			{!! Form::radio('status', 0, $tagihan->status ==  0) !!} Belum Lunas
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('keterangan', 'Keterangan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('keterangan', $tagihan->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
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
	$('#siswa_id, #bulan').select2();
</script>

@stop