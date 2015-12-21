@extends('psb')

@section('content')

<h1 class="text-center">Laporan PSB MIAS 2016/2017</h1><hr />


<!-- {!! Form::open(['class' => 'form-inline', 'method' => 'GET']) !!}
	<strong>Filter Laporan: </strong>
	{!! Form::text('start', null, ['class' => 'form-control', 'placeholder' => 'Mulai Tanggal']) !!}
	{!! Form::text('stop', null, ['class' => 'form-control', 'placeholder' => 'Sampai Tanggal']) !!}
	<button type="submit" name="button" class="btn btn-success"><span class="fa fa-filter"></span> Filter</button>
{!! Form::close() !!} -->

<hr />

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
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0 )
		<tr>
			<th class="text-center">{{$v}}</th>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 1)->sekarang()->extern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 1)->sekarang()->intern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 2)->sekarang()->extern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 2)->sekarang()->intern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 3)->sekarang()->extern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 3)->sekarang()->intern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 4)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 6)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 7)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 8)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', 10)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', 11)->sekarang()->count('id')}}</td>
			<th class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</th>
		</tr>
		@endif
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">TOTAL</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 1)->extern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 1)->intern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 2)->extern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 2)->intern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 3)->extern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 3)->intern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 4)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 6)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 7)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 8)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', 10)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', 11)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
		</tr>
	</tfoot>
</table>

@stop

@section('script')

	<script type="text/javascript">
		$(function() {
			$( "[name=start], [name=stop]" ).datepicker({
				// minDate: '-30d',
				// maxDate: '0d',
				dateFormat: 'yy-mm-dd'
			});
		});
	</script>

@stop
