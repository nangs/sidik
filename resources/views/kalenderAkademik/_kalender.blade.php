<div id="kalender"></div>
<div id="chart"></div>



@section('css')
	
	<link href="/fullcalendar/fullcalendar.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/fullcalendar/fullcalendar.min.js"></script>
	<script type="text/javascript" src="/Highcharts/js/highcharts.js"></script>

	<script type="text/javascript">
		
		$('#kalender').fullCalendar({
			// editable: true,
			eventLimit: true,
			header: {
				left: 'prev, next',
				center: 'title',
				right: 'today'
			},
			defaultView: 'month',
			timeFormat: 'HH:mm',
			axisFormat: 'HH:mm',
			titleFormat: {
				week: 'd[ yyyy] { -[ MMM] d MMM yyyy}',
				day: 'dddd, d MMM yyyy'
			},
			lazyFetching: true,
			events: '/kalenderAkademik/event'
		});

		// var chart = new Highcharts.Chart({
		// 	"chart": {"renderTo": "chart"},
		// 	"title": { "text": "Fruit Consumption" },
		// 	"xAxis": {
		// 		"categories": ["Apples", "Bananas", "Oranges"]
		// 	},
		// 	"yAxis": {
		// 		"title": { "text": "Fruit eaten" }
		// 	},
		// 	"series": [
		// 		{ "name": "Jane", "data": [1, 0, 4] },
		// 		{ "name": "John", "data": [5, 7,3] }
		// 	]
		// });

	</script>

@stop