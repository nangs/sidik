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
            <h3>Grafik Pendaftar Santri Baru MIAS</h3><hr />
    		<div id="chart1"></div>
    	</div>

    </div>

@stop

@section('script')

	<script type="text/javascript" src="/Highcharts/js/highcharts.js"></script>
    <script type="text/javascript" src="/Highcharts/js/modules/funnel.js"></script>
    <script type="text/javascript" src="/Highcharts/js/modules/exporting.js"></script>

    <script type="text/javascript">

        $('#chart1').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pendaftar Berdasarkan Jenjang'
            },
            subtitle: {
                // text: ''
            },
            xAxis: {
                categories: [
                    'SD',
                    'SMP',
                    'SMA',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pendaftar'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Laki - Laki',
                data: [106.4, 129.2, 144.0]

            }, {
                name: 'Perempuan',
                data: [34.5, 39.7, 52.6]

            }, {
                name: 'Total',
                data: [140.9, 170.7, 198.6]

            }]
        });

	</script>

@stop