{!! Form::model($siswa, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $siswa->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nis', 'NIS:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nis', $siswa->nis, ['class' => 'form-control', 'placeholder' => 'NIS']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('jns_kelamin', 'Jenis Kelamin:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('jns_kelamin', [0 => 'Perempuan', 1 => 'Laki - Laki'], $siswa->jns_kelamin, ['class' => 'form-control']) !!}	
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
		{!! Form::label('wali_id', 'Wali:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('wali_id', App\Wali::lists('nama', 'id'), $siswa->wali_id, ['class' => 'form-control']) !!}	
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