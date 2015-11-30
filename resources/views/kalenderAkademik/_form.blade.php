{!! Form::model($kalenderAkademik, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ta_id', App\Ta::lists('periode', 'id'), $kalenderAkademik->ta_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('dari', 'Dari Tanggal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('dari', $kalenderAkademik->dari, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('sampai', 'Sampai Tanggal:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('sampai', $kalenderAkademik->sampai, ['class' => 'form-control', 'placeholder' => 'yyyy-mm-dd']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kegiatan', 'Kegiatan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kegiatan', $kalenderAkademik->kegiatan, ['class' => 'form-control', 'placeholder' => 'Kegiatan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('warna', 'Warna:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('warna', ['green' => 'Hijau', 'red' => 'Merah', 'yellow' => 'Kuning', 'blue' => 'Biru'], $kalenderAkademik->warna, ['class' => 'form-control']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}