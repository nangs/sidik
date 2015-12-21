{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	{!! Form::hidden('psb[jenjang]', $psb->jenjang) !!}
	@include('psb._formCalonSiswa')
	@include('psb._formDokumen')

	@include('psb._formAsalSekolah')

	@if ($action == 'edit')
	@include('psb._formBeasiswaEdit')
	@else
	@include('psb._formBeasiswa')
	@endif

	@if ($action == 'edit')
	@include('psb._formPrestasiEdit')
	@else
	@include('psb._formPrestasi')
	@endif

	@include('psb._formOrangTua', ['hubungan' => 'Ayah'])
	@include('psb._formOrangTua', ['hubungan' => 'Ibu'])
	@include('psb._formOrangTua', ['hubungan' => 'Wali'])
	@include('psb._formAlamat')

	<hr />

	<div  class="text-center">
		{!! Form::submit('SIMPAN', ['class' => 'btn btn-success']) !!}
	</div>

{!! Form::close() !!}

@section('script')

<script type="text/javascript">

	$(function() {

		$( "#tgllahir" ).datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: '-20y',
			maxDate: '-5y',
			dateFormat: 'yy-mm-dd'
		});

		$( "[name='asalSekolah[propinsi]'], [name='Ayah[provinsi]'], [name='Ibu[provinsi]'], [name='Wali[provinsi]'], [name='alamatCalonSiswa[provinsi]']" ).autocomplete({
			source: {!! json_encode(\App\Psb::provinsi()) !!}, // bisa url, bisa array/object
			minLength: 2,
		});

		// copy alamat ibu dari ayah
		$('input[name=alamatibu]').change(function() {
			var t = this;
			if (this.value == 'sama') {
				var o = {};
			    var a = $('[name^=Ayah]').serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    // console.log(o);

			    $.each(o, function(i,v) {
			    	// var exclude = ['Ayah[nama]', ''];
			    	$('[name="'+i.replace('Ayah', 'Ibu')+'"]').val(v);
			    });
			} else {
	    		// TODO : kosongin form alamat
			}
		});

		$('input[name=alamatsiswa]').change(function() {
			var t = this;
			if (this.value == 'Ayah') {
				var o = {};
			    var a = $('[name^=Ayah]').serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    // console.log(o);

			    $.each(o, function(i,v) {
			    	// var exclude = ['Ayah[nama]', ''];
			    	$('[name="'+i.replace('Ayah', 'alamatCalonSiswa')+'"]').val(v);
			    });
			}

			if (this.value == 'Ibu') {
				var o = {};
			    var a = $('[name^=Ibu]').serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    // console.log(o);

			    $.each(o, function(i,v) {
			    	// var exclude = ['Ayah[nama]', ''];
			    	$('[name="'+i.replace('Ibu', 'alamatCalonSiswa')+'"]').val(v);
			    });
			}

			if (this.value == 'Wali') {
				var o = {};
			    var a = $('[name^=Wali]').serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    // console.log(o);

			    $.each(o, function(i,v) {
			    	// var exclude = ['Ayah[nama]', ''];
			    	$('[name="'+i.replace('Wali', 'alamatCalonSiswa')+'"]').val(v);
			    });
			}

			else {
	    		// TODO : kosongin form alamat
			}
		});

		// copy data wali dari ayah / ibu
		$('input[name=datawali]').change(function() {
			var t = this;
			if (this.value == 'Ayah' || this.value == 'Ibu') {
				var o = {};
			    var a = $('[name^='+this.value+']').serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    // console.log(o);

			    $.each(o, function(i,v) {
			    	if (i != t.value+'[hubungan]') {
			    		$('[name="'+i.replace(t.value, 'Wali')+'"]').val(v);
			    	}
			    });
			} else {
	    		$('[name^=Wali]').value = null;
	    		$('[name="Wali[hubungan]"]').value = 'Wali';
			}
		});

	});

</script>

@stop
