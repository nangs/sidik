@extends('app')

@section('content')

<h1>Daftar Siswa Kelas: {{ $kelas->nama }}</h1>
<hr />

{!! Form::open(['url' => '/kelas/saveSiswa/'.$kelas->id, 'class' => 'form-horizontal', 'method' => 'POST']) !!}

	<div class="form-group">
		{!! Form::label('siswa', 'Siswa:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('siswa[]', App\Siswa::selectRaw('CONCAT(nis, " - ", nama) as nama, id')->lists('nama', 'id'), $kelas->siswas()->lists('siswa_id')->toArray(), ['class' => 'form-control', 'multiple' => true]) !!}	
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}

@stop

@section('css')
<link href="/select2/dist/css/select2.min.css" rel="stylesheet">
@stop

@section('script')

<script type="text/javascript" src="/select2/dist/js/select2.min.js"></script>

<script type="text/javascript">
	$('select').select2();
</script>

@stop