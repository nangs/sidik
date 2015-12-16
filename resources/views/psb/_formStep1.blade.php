{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}
	
	@include('psb._formPsb')
	@include('psb._formCalonSiswa')
	@include('psb._formOrangTua', ['hubungan' => 'Wali'])

	@if (!Auth::check())
		@include('psb._formUser')
	@endif

	<hr />

	<div  class="text-center">
		{!! Form::submit('SIMPAN', ['class' => 'btn btn-success btn-lg']) !!}
	</div>

{!! Form::close() !!}


@section('css')
<!-- <link href="/select2/dist/css/select2.min.css" rel="stylesheet"> -->
@stop

@section('script')

<!-- <script type="text/javascript" src="/select2/dist/js/select2.min.js"></script> -->

<script type="text/javascript">
	// $('select').select2();

	$(function() {
		$( "#tglbayar" ).datepicker({
			// changeMonth: true,
			// changeYear: true,
			showButtonPanel: true,
			dateFormat: 'yy-mm-dd',
			maxDate: '0d',
		});

		$( "#tgllahir" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: '-20y',
			maxDate: '-5y',
			dateFormat: 'yy-mm-dd'
		});

		$( "#birds" ).autocomplete({
			source: "search.php",
			minLength: 2,
			select: function( event, ui ) {
				log( ui.item ?
				"Selected: " + ui.item.value + " aka " + ui.item.id :
				"Nothing selected, input was " + this.value );
			}
		});
	});
</script>

@stop