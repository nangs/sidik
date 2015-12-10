{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}
	
	@include('psb._formPsb')
	@include('psb._formCalonSiswa')
	@include('psb._formOrangTua', ['hubungan' => 'Wali'])

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
</script>

@stop