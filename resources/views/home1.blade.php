@extends('psb')

@section('content')

	<div class="text-center">
        <h2 style="margin-top:0;">Selamat Datang di Website PSB Online MIAS TA 2016/2017!</h2>

        <h3>4 Langkah Mudah Mendaftar</h3>

        <br />
        @include('_step', ['step' => 4])
        
    </div>

    <br />

    <div class="alert alert-success text-center">

        <h3>Untuk melakukan pendaftaran silakan klik tombol di bawah:</p>

        <p><a class="btn btn-success btn-lg" href="/psb/step1" role="button">DAFTAR</a></p>

        <h3>Atau silakan <a href="/auth/login" class="btn btn-success">Login</a> untuk melihat status pendaftaran atau mendaftarkan calon siswa baru.</h3>
    </div>

    <div class="row">

    	<div class="col-md-6">
    		<h3>Syarat Pendaftaran Santri Baru MIAS</h3><hr />
			@include('_syarat')
    	</div>

    	<div class="col-md-6">
            <h3>Laporan PSB MIAS 2016/2017</h3><hr />

            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>JENJANG</th>
                        <th style="width:13%" class="text-center">Daftar</th>
                        <th style="width:13%" class="text-center">Isi Formulir</th>
                        <th style="width:13%" class="text-center">Test & Wawancara</th>
                        <th style="width:13%" class="text-center">Diterima</th>
                        <th style="width:13%" class="text-center">Tidak Diterima</th>
                        <th style="width:13%" class="text-center">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Psb::jenjangList() as $k => $v)
                    @if ($k > 0 )
                    <tr>
                        <th>{{$v}}</th>
                        <td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
                        <td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
                        <td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
                        <td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
                        <td class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</td>
                        <th class="text-center">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</th>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6" class="text-right">TOTAL</th>
                        <th class="text-center">{{\App\Psb::sekarang()->count('id')}}</th>
                    </tr>
                </tfoot>
            </table>
    		<div id="chart1"></div>
    	</div>

    </div>

@stop

@section('script')

	<!-- <script type="text/javascript" src="/Highcharts/js/highcharts.js"></script> -->
    <!-- <script type="text/javascript" src="/Highcharts/js/modules/funnel.js"></script> -->
    <!-- <script type="text/javascript" src="/Highcharts/js/modules/exporting.js"></script> -->

    <script type="text/javascript">

        // $('#chart1').highcharts({
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Jumlah Pendaftar Berdasarkan Jenjang'
        //     },
        //     subtitle: {
        //         // text: ''
        //     },
        //     xAxis: {
        //         categories: [
        //             'SD',
        //             'SMP',
        //             'SMA',
        //         ],
        //         crosshair: true
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: 'Jumlah Pendaftar'
        //         }
        //     },
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: !!json_encode($data)!!
        // });

	</script>

@stop