@extends('psb')

@section('content')

<h1>Laporan PSB MIAS 2016/2017</h1><hr />

<table class="table table-hover table-striped table-bordered">
	<thead>
		<tr>
			<th rowspan="2" class="text-center" style="vertical-align:middle;">JENJANG</th>
			<th colspan="13" class="text-center">PROSES</th>
		</tr>
		<tr>
			<th style="width:6%" class="text-center">Daftar</th>
			<th style="width:6%" class="text-center">Daftar (Intern)</th>
			<th style="width:6%" class="text-center">Bayar</th>
			<th style="width:6%" class="text-center">Bayar (Intern)</th>
			<th style="width:6%" class="text-center">Isi Formulir</th>
			<th style="width:6%" class="text-center">Isi Formulir (Intern)</th>
			<th style="width:6%" class="text-center">Formulir Lengkap</th>
			<th style="width:6%" class="text-center">Test</th>
			<th style="width:6%" class="text-center">Wawancara</th>
			<th style="width:6%" class="text-center">Wawancara Orang Tua</th>
			<th style="width:6%" class="text-center">Diterima</th>
			<th style="width:6%" class="text-center">Tidak Diterima</th>
			<th style="width:6%" class="text-center">TOTAL</th>
		</tr>
	</thead>
	<tbody>
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0 )
		<tr>
			<th class="text-center">{{$v}}</th>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 1)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 1)->sekarang()->intern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 2)->sekarang()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 2)->sekarang()->intern()->count('id')}}</td>
			<td class="text-center">{{\App\Psb::where('jenjang', $k)->where('status_progress', '>=', 3)->sekarang()->count('id')}}</td>
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
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 1)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 1)->intern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 2)->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 2)->intern()->count('id')}}</th>
			<th class="text-center">{{\App\Psb::sekarang()->where('status_progress', '>=', 3)->count('id')}}</th>
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
