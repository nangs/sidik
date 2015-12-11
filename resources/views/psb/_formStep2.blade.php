{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}
	
	<!-- include('psb._formPsb') -->
	{!! Form::hidden('psb[jenjang]', $psb->jenjang) !!}
	@include('psb._formCalonSiswa')
	@include('psb._formDokumen')

	@if ($psb->jenjang > 1)
		@include('psb._formAsalSekolah')
		@include('psb._formBeasiswa')
		@include('psb._formPrestasi')
	@endif

	@include('psb._formOrangTua', ['hubungan' => 'Wali'])
	@include('psb._formOrangTua', ['hubungan' => 'Ayah'])
	@include('psb._formOrangTua', ['hubungan' => 'Ibu'])
	@include('psb._formAlamat')

	<hr />

	{!! Form::submit('Simpan', ['class' => 'btn btn-success', 'style' => 'width:100%']) !!}

{!! Form::close() !!}


@section('css')
<!-- <link href="/select2/dist/css/select2.min.css" rel="stylesheet"> -->
@stop

@section('script')

<!-- <script type="text/javascript" src="/select2/dist/js/select2.min.js"></script> -->

<script type="text/javascript">
	// $('select').select2();

	$(function() {
		$( "#tgllahir" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: '-20y',
			maxDate: '-5y',
			dateFormat: 'yy-mm-dd'
		});
	});
</script>

@stop