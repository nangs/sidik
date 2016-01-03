{!! Form::model($psb, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	{!! Form::hidden('psb[jenjang]', $psb->jenjang) !!}
	@include('psb._formCalonSiswa')
	@include('psb._formDokumen')
	@include('psb._formAsalSekolah')
	@include('psb._formBeasiswa')
	@include('psb._formPrestasi')
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

		var i = 0;
		var j = 0;

		// dynamic form beasiswa
		$('#add-beasiswa').click(function() {
			i++;
			var row = '<tr>' +
				'<td><select class="form-control" name="beasiswa['+i+'][jenis]"><option value="" selected="selected">- Pilih Jenis Beasiswa -</option><option value="1">Anak Berprestasi</option><option value="2">Anak Miskin</option><option value="3">Pendidikan</option><option value="4">Unggulan</option><option value="5">Lain - Lain</option></select></td>' +
				'<td><input class="form-control" placeholder="Sumber" name="beasiswa['+i+'][sumber]" type="text"></td>' +
				'<td><input class="form-control" placeholder="Tahun Mulai" name="beasiswa['+i+'][tahun_mulai]" type="number"></td>' +
				'<td><input class="form-control" placeholder="Tahun Selesai" name="beasiswa['+i+'][tahun_selesai]" type="number"></td>' +
				'<td><a href="#" class="remove-beasiswa"><span class="fa fa-remove"></span></a></td>' +
			'</tr>';

			$('#beasiswa').append(row);
			return false;
		});

		$('#beasiswa').on('click', '.remove-beasiswa', function() {
			$(this).parent().parent().remove();
			return false;
		});

		// dynamic form prestasi
		$('#add-prestasi').click(function() {
			j++;
			var row = '<tr>' +
				'<td><input class="form-control" placeholder="Tahun" name="prestasi['+j+'][tahun]" type="number"></td>' +
				'<td><input class="form-control" placeholder="Lomba" name="prestasi['+j+'][lomba]" type="text"></td>' +
				'<td><input class="form-control" placeholder="Juara Ke" name="prestasi['+j+'][juara_ke]" type="number"></td>' +
				'<td><select class="form-control" name="prestasi['+j+'][tingkat]"><option value="" selected="selected">- Pilih Tingkat -</option><option value="1">Sekolah</option><option value="2">Kecamatan</option><option value="3">Kota/Kabupaten</option><option value="4">Provinsi</option><option value="5">Nasional</option><option value="6">Internasional</option></select></td>' +
				'<td><select class="form-control" name="prestasi['+j+'][jenis]"><option value="" selected="selected">- Pilih Jenis Prestasi -</option><option value="1">Sain</option><option value="2">Seni</option><option value="3">Olah Raga</option><option value="4">Lain - Lain</option></select></td>' +
				'<td><a href="#" class="remove-prestasi"><span class="fa fa-remove"></span></a></td>' +
			'</tr>';

			$('#prestasi').append(row);
			return false;
		});

		$('#prestasi').on('click', '.remove-prestasi', function() {
			$(this).parent().parent().remove();
			return false;
		});

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
			    	$('[name="'+i.replace('Ayah', 'Ibu')+'"]').val(v);
			    });

				$('[name="Ibu[hubungan]"]').val('Ibu');
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
