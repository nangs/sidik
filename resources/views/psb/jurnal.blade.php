@extends('psb')

@section('content')

	<h1 class="text-center">Jurnal Harian PSB Ma'had Ihya' As Sunnah Tahun Ajaran 2015/2016</h1>
	<hr />

    <div class="row" style="margin-top:50px;">
    	
    	@for($i=1;$i<=2;$i++)

        <div class="col-md-6 text-center">
            <div id="chart{{ $i }}"></div>
        </div>

        @endfor
        
    </div>

    <div class="row" style="margin-top:50px;">
    	
    	@for($i=3;$i<=4;$i++)

        <div class="col-md-6 text-center">
            <div id="chart{{ $i }}"></div>
        </div>

        @endfor
    	
    </div>

    <div id="chart6" style="margin-top:50px;"></div>

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

        $('#chart2').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumla Siswa Berdasarkan Jenjang'
            },
            subtitle: {
                // text: ''
            },
            xAxis: {
                categories: [
                    'PAUD',
                    'TK',
                    'SD',
                    'SMP',
                    'SMA',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Siswa'
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
                name: 'Jumlah Siswa',
                data: [49.9, 71.5, 106.4, 129.2, 144.0]

            }]
        });

        $('#chart3').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumla Siswa Berdasarkan Tingkat'
            },
            subtitle: {
                // text: ''
            },
            xAxis: {
                categories: [
                    'I',
                    'II',
                    'III',
                    'IV',
                    'V',
                    'VI',
                    'VI',
                    'VIII',
                    'IX',
                    'X',
                    'XI',
                    'XII',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Siswa'
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
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 49.9, 71.5, 106.4, 129.2, 144.0, 129.2, 144.0]

            }, {
                name: 'Perempuan',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 49.9, 71.5, 106.4, 129.2, 144.0, 52.6, 49.9]

            }]
        });

        $('#chart4').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Jumlah Siswa Berdasarkan Jenis Kelamin'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: "Jenis Kelamin",
                colorByPoint: true,
                data: [{
                    name: "Laki - Laki",
                    y: 56.33
                }, {
                    name: "Perempuan",
                    y: 24.03,
                    // sliced: true,
                    // selected: true
                }]
            }]
        });

        $('#chart6').highcharts({
            chart: {
                type: 'funnel',
                marginRight: 100
            },
            title: {
                text: 'Pendaftar Berdasarkan Status',
                x: -50
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b> ({point.y:,.0f})',
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                        softConnector: true
                    },
                    neckWidth: '30%',
                    neckHeight: '20%'

                    //-- Other available options
                    // height: pixels or percent
                    // width: pixels or percent
                }
            },
            legend: {
                enabled: false
            },
            series: [{
                name: 'Jumlah Pendaftar',
                data: [
                    ['Pembelian Formulir',   15654],
                    ['Formulir Telah Dibayar',       4064],
                    ['Formulir Diisi', 2987],
                    ['Data Diverifikasi', 2987],
                    ['Test Bakat & Minat', 2987],
                    ['Test Wawancara', 2987],
                    ['Diterima', 2987],
                ]
            }]
        });
            
    </script>

@stop