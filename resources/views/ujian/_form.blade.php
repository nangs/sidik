{!! Form::model($ujian, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ta_id', [null => '- Pilih Tahun Ajaran -'] + App\Ta::lists('periode', 'id')->toArray(), $ujian->ta_id, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenjang_id', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenjang_id', 
			[null => '- Pilih Jenjang -'] + App\Jenjang::lists('nama', 'id')->toArray(), 
			$ujian->jenjang_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tingkat_id', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('tingkat_id', 
			[null => '- Pilih Tingkat -'] + App\Tingkat::lists('nama', 'id')->toArray(), 
			$ujian->tingkat_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenis_id', 'Jenis:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenis_id', 
			[null => '- Pilih Jenis -'] + App\JenisUjian::orderBy('nama', 'ASC')->lists('nama', 'id')->toArray(), 
			$ujian->jenis_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}