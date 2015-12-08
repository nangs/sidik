<div class="row">

	<div class="col-md-7">

		{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}
			
			@include('psb._formCalonsiswa')
			@include('psb._formOrangTua', ['hubungan' => 'Ayah'])
			@include('psb._formOrangTua', ['hubungan' => 'Ibu'])
			@include('psb._formOrangTua', ['hubungan' => 'Wali'])
			@include('psb._formBeasiswa')
			@include('psb._formPrestasi')
			@include('psb._formAlamat')

			<hr />

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
				</div>
			</div>

		{!! Form::close() !!}

	</div>

	<div class="col-md-5">

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Petunjuk Pengisian Formulir</h3>
			</div>
			<div class="panel-body">
				ini bantuannya
			</div>
		</div>
		
	</div>
</div>	

@section('css')
<link href="/select2/dist/css/select2.min.css" rel="stylesheet">
@stop

@section('script')

<script type="text/javascript" src="/select2/dist/js/select2.min.js"></script>

<script type="text/javascript">
	$('').select2();
</script>

@stop