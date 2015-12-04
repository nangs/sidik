{!! Form::model($kelas, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('ta_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ta_id', [null => '- Pilih Tahun Ajaran -'] + App\Ta::lists('periode', 'id')->toArray(), $kelas->ta_id, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jenjang_id', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jenjang_id', 
			[null => '- Pilih Jenjang -'] + App\Jenjang::lists('nama', 'id')->toArray(), 
			$kelas->jenjang_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('tingkat_id', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('tingkat_id', 
			[null => '- Pilih Tingkat -'] + App\Tingkat::selectRaw('CONCAT(nama, " - ", keterangan) as nm, id')->lists('nm', 'id')->toArray(), 
			$kelas->tingkat_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $kelas->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('wali_id', 'Wali Kelas:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('wali_id', [null => '- Pilih Wali Kelas -'] +  App\Karyawan::lists('nama', 'id')->toArray(), $kelas->wali_id, ['class' => 'form-control']) !!}	
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('ruang_id', 'Ruang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('ruang_id',  [null => '- Pilih Ruangan -'] + App\Ruangan::lists('kode', 'id')->toArray(), $kelas->ruang_id, ['class' => 'form-control']) !!}	
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
	$('select[name=wali_id], select[name=tingkat_id]').select2();
</script>

@stop