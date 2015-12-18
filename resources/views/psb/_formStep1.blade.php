{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method, 'files' => true]) !!}
	
	@include('psb._formCalonSiswa')
	@include('psb._formPsb')

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

		// $( "#birds" ).autocomplete({
		// 	source: "search.php", // bisa url, bisa array/object
		// 	minLength: 2,
		// 	select: function( event, ui ) {
		// 		log( ui.item ?
		// 		"Selected: " + ui.item.value + " aka " + ui.item.id :
		// 		"Nothing selected, input was " + this.value );
		// 	}
		// });


		$('#metode-pembayaran').change(function() {
			if (this.value == 'Tunai') {
				$('#rekening').hide();
			} else {
				$('#rekening').show();
			}
		});

		$('#jenjang').change(function() {
			if (this.value == 1) {
				$('#tingkat').html('<option value="1">I</option> <option value="2">II</option> <option value="3">III</option> <option value="4">IV</option> <option value="5">V</option> <option value="6">VI</option>');
			} else if (this.value == 2) {
				$('#tingkat').html('<option value="7">VII</option> <option value="8">VIII</option> <option value="9">IX</option>');
			} else if (this.value == 3) {
				$('#tingkat').html('<option value="10">X</option> <option value="11">XI</option> <option value="12">XII</option><option value="13">TBA</option>');
			} else if (this.value > 3) {
				$('#tingkat').html('<option value="14">Semester 1</option> <option value="15">Semester 2</option> <option value="16">Semester 3</option><option value="17">Semester 4</option><option value="18">Semester 5</option><option value="19">Semester 6</option><option value="20">Semester 7</option><option value="21">Semester 8</option>');
			}
		});

	});

</script>

@stop