@extends('psb')

@section('content')

<h1 class="text-center">Laporan PSB MIAS {{$ta}}</h1>
<h3 class="text-center">
	Laporan per tanggal
	{{ date('d F Y', strtotime(Request::get('start', $awal))) }} s.d
	{{ date('d F Y', strtotime(Request::get('stop', date('Y-m-d')))) }}
</h3>
<hr />

{!! Form::open(['class' => 'form-inline', 'method' => 'GET']) !!}
	<strong>Filter Laporan: </strong>
	{!! Form::text('start', old('start'), ['class' => 'form-control', 'placeholder' => 'Mulai Tanggal']) !!}
	{!! Form::text('stop', old('stop'), ['class' => 'form-control', 'placeholder' => 'Sampai Tanggal']) !!}
	<button type="submit" name="button" class="btn btn-success"><span class="fa fa-filter"></span> Filter</button>
{!! Form::close() !!}

<hr />

<div class="table-responsive">
	<table class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th rowspan="3" class="text-center" style="vertical-align:middle;">JENJANG</th>
				<th colspan="12" class="text-center">PROSES</th>
				<th style="width:6%;vertical-align:middle;" class="text-center" rowspan="3">TOTAL</th>
			</tr>
			<tr>
				<th colspan="2" class="text-center">Daftar</th>
				<th colspan="2" class="text-center">Bayar</th>
				<th colspan="2" class="text-center">Isi Formulir</th>
				<th style="width:6%" class="text-center" rowspan="2">Formulir Lengkap</th>
				<th style="width:6%" class="text-center" rowspan="2">Test</th>
				<th style="width:6%" class="text-center" rowspan="2">Wawancara</th>
				<th style="width:6%" class="text-center" rowspan="2">Wawancara Orang Tua</th>
				<th style="width:6%" class="text-center" rowspan="2">Diterima</th>
				<th style="width:6%" class="text-center" rowspan="2">Tidak Diterima</th>
			</tr>
			<tr>
				<th style="width:6%" class="text-center">Extern</th>
				<th style="width:6%" class="text-center">Intern</th>
				<th style="width:6%" class="text-center">Extern</th>
				<th style="width:6%" class="text-center">Intern</th>
				<th style="width:6%" class="text-center">Extern</th>
				<th style="width:6%" class="text-center">Intern</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $d)
			<tr>
				<th class="text-center">{{\App\Psb::jenjangList($d->j)}}</th>
				<td class="text-center">{{$d->daftar_extern}}</td>
				<td class="text-center">{{$d->daftar_intern}}</td>
				<td class="text-center">{{$d->bayar_extern}}</td>
				<td class="text-center">{{$d->bayar_intern}}</td>
				<td class="text-center">{{$d->isi_form_extern}}</td>
				<td class="text-center">{{$d->isi_form_intern}}</td>
				<td class="text-center">{{$d->form_ok}}</td>
				<td class="text-center">{{$d->test_ok}}</td>
				<td class="text-center">{{$d->wawancara_ok}}</td>
				<td class="text-center">{{$d->wawancara_ortu_ok}}</td>
				<td class="text-center">{{$d->diterima}}</td>
				<td class="text-center">{{$d->ditolak}}</td>
				<th class="text-center">{{$d->total}}</th>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<th class="text-center">TOTAL</th>
				<th class="text-center">{{$dataFooter->daftar_extern}}</th>
				<th class="text-center">{{$dataFooter->daftar_intern}}</th>
				<th class="text-center">{{$dataFooter->bayar_extern}}</th>
				<th class="text-center">{{$dataFooter->bayar_intern}}</th>
				<th class="text-center">{{$dataFooter->isi_form_extern}}</th>
				<th class="text-center">{{$dataFooter->isi_form_intern}}</th>
				<th class="text-center">{{$dataFooter->form_ok}}</th>
				<th class="text-center">{{$dataFooter->test_ok}}</th>
				<th class="text-center">{{$dataFooter->wawancara_ok}}</th>
				<th class="text-center">{{$dataFooter->wawancara_ortu_ok}}</th>
				<th class="text-center">{{$dataFooter->diterima}}</th>
				<th class="text-center">{{$dataFooter->ditolak}}</th>
				<th class="text-center">{{$dataFooter->total}}</th>
			</tr>
		</tfoot>
	</table>
</div>

@stop

@section('script')

	<script type="text/javascript">
		$(function() {
			$( "[name=start]" ).datepicker({
				defaultDate: "now",
				changeMonth: true,
				dateFormat: 'yy-mm-dd',
				onClose: function( selectedDate ) {
					$( "[name=stop]" ).datepicker( "option", "minDate", selectedDate );
				}
			});
			$( "[name=stop]" ).datepicker({
				defaultDate: "now",
				changeMonth: true,
				dateFormat: 'yy-mm-dd',
				onClose: function( selectedDate ) {
					$( "[name=start]" ).datepicker( "option", "maxDate", selectedDate );
				}
			});
		});
	</script>

@stop
