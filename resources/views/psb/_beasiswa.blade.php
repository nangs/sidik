{!! Form::open(['id' => 'form-beasiswa']) !!}

{!! Form::hidden('calon_siswa_id', $psb->calonSiswa->id) !!}

<table class="table table-hover table-striped grid">
	<thead>
		<tr>
			<th>Jenis</th>
			<th>Penyelenggara/Sumber</th>
			<th>Tahun Mulai</th>
			<th>Tahun Selesai</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="beasiswa">
		<tr>
			<td>{!! Form::select('jenis', App\BeasiswaCalonSiswa::jenisList(), null, ['class' => 'form-control']) !!}</td>
			<td>{!! Form::text('sumber', null, ['class' => 'form-control', 'placeholder' => 'Sumber']) !!}</td>
			<td>{!! Form::input('number', 'tahun_mulai', null, ['class' => 'form-control', 'placeholder' => 'Tahun Mulai']) !!}</td>
			<td>{!! Form::input('number', 'tahun_selesai', null, ['class' => 'form-control', 'placeholder' => 'Tahun Selesai']) !!}</td>
			<td><a href="#" id="add-beasiswa"><span class="fa fa-plus"></span></a></td>
		</tr>
		@foreach($beasiswa as $b)
		<tr>
			<td>{{\App\BeasiswaCalonSiswa::jenisList($b->jenis)}}</td>
			<td>{{$b->sumber}}</td>
			<td>{{$b->tahun_mulai}}</td>
			<td>{{$b->tahun_selesai}}</td>
			<td><a href="/beasiswa-calon-siswa/{{$b->id}}" class="remove-beasiswa"><span class="fa fa-trash"></span></a></td>
		</tr>
		@endforeach
	</tbody>
</table>

{!! Form::close() !!}

@section('script')
<script type="text/javascript">
	$(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('#add-beasiswa').click(function(e) {
			e.preventDefault();
			var data = $('#form-beasiswa').serialize();
			$.ajax({
				type: 'POST',
				url: '/beasiswa-calon-siswa',
				data: data,
				dataType: 'json',
				success: function(j) {
					if (typeof j.success != 'undefined' && j.success == true) {
						alert(j.message);
						var row = '<tr>' +
							'<td>'+j.data.jns+'</td>' +
							'<td>'+j.data.sumber+'</td>' +
							'<td>'+j.data.tahun_mulai+'</td>' +
							'<td>'+j.data.tahun_selesai+'</td>' +
							'<td><a href="/beasiswa-calon-siswa/'+j.data.id+'" class="remove-beasiswa"><span class="fa fa-trash"></span></a></td>' +
						'</tr>';
						$('#beasiswa').append(row);
						// console.log(j.data);
					} else {
						alert(j);
					}
				},
				error: function(data){
				    // Error...
				    var errors = $.parseJSON(data.responseText);

				    console.log(errors);

				    // $.each(errors, function(index, value) {
				    //     $.gritter.add({
				    //         title: 'Error',
				    //         text: value
				    //     });
				    // });
				}
			});
		});

		$('#beasiswa').on('click', '.remove-beasiswa', function(e) {
			e.preventDefault();
			var t = this;
			if (confirm('Anda yakin?')) {
				var data = $('#form-beasiswa').serialize();
				$.ajax({
					type: 'DELETE',
					url: t.href,
					data: data,
					dataType: 'json',
					success: function(j) {
						if (j.success == true) {
							alert(j.message);
							$(t).parent().parent().remove();
						} else {
							alert(j.message);
						}
					}
				});
			}
		});
	});
</script>
@stop
