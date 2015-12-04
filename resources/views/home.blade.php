@extends('app')

@section('content')

    <div class="row" style="margin-top:50px;">
        <div class="col-md-4 text-center">
            <div id="chart1"></div>
        </div>
        <div class="col-md-4 text-center">
            <div id="chart2"></div>
        </div>
        <div class="col-md-4 text-center">
            <div id="chart3"></div>
        </div>
        
    </div>

    <div class="row" style="margin-top:40px;">
    	<div class="col-md-4 text-center">
            <div id="chart4"></div>
        </div>
        <div class="col-md-8 text-center">
            <div id="chart5"></div>
        </div>
    	<div class="col-md-4 text-center">
            <div id="chart6"></div>
    	</div>
    	
    </div>

@stop

@section('script')
    
    <script type="text/javascript" src="/Highcharts/js/highcharts.js"></script>

    <script type="text/javascript">

        $('#chart1').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumla Siswa Berdasarkan Jenis Kelamin'
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
                name: 'Laki - Laki',
                data: [49.9, 71.5, 106.4, 129.2, 144.0]

            }, {
                name: 'Perempuan',
                data: [42.4, 33.2, 34.5, 39.7, 52.6]

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
                    sliced: true,
                    selected: true
                }]
            }]
        });

        $('#chart5').highcharts({
            title: {
                text: 'Perkembangan Jumlah Siswa Tiap Tahun Ajaran',
                x: -20 //center
            },
            subtitle: {
                // text: 'Source: WorldClimate.com',
                x: -20
            },
            xAxis: {
                categories: ['2013 - 2014', '2014 - 2015', '2015 - 2016']
            },
            yAxis: {
                title: {
                    text: 'Jumlah Siswa'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'PAUD',
                data: [7.0, 6.9, 9.5]
            }, {
                name: 'TK',
                data: [2, 4.8, 5.7]
            }, {
                name: 'SD',
                data: [9, 8.6, 3.5]
            }, {
                name: 'SMP',
                data: [3.9, 4.2, 5.7]
            }, {
                name: 'SMA',
                data: [4.9, 5.2, 7.7]
            }]
        });
            
    </script>

@stop
