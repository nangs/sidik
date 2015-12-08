<div class="row">
	<div class="col-md-6">
		<div id="kalender1"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender2"></div>
	</div>
</div><hr />
<div class="row">
	<div class="col-md-6">
		<div id="kalender3"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender4"></div>
	</div>
</div><hr />
<div class="row">
	<div class="col-md-6">
		<div id="kalender5"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender6"></div>
	</div>
</div><hr />
<div class="row">
	<div class="col-md-6">
		<div id="kalender7"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender8"></div>
	</div>
</div><hr />
<div class="row">
	<div class="col-md-6">
		<div id="kalender9"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender10"></div>
	</div>
</div><hr />
<div class="row">
	<div class="col-md-6">
		<div id="kalender11"></div>
	</div>
	<div class="col-md-6">
		<div id="kalender12"></div>
	</div>
</div>


@section('css')
	
	<link href="/fullcalendar/fullcalendar.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/fullcalendar/fullcalendar.min.js"></script>

	<script type="text/javascript">
		
		for(i=1;i<=12;i++)
		{
			$('#kalender'+i).fullCalendar({
				eventLimit: true,
				// views: {
				// 	agendaSixMonth :{
				// 		type: 'agenda',
				// 		duration: {months: 6},
				// 	}
				// },
				header: {
					left: 'prev, next',
					center: 'title',
					right: 'today'
				},
				// defaultView: 'month',
				timeFormat: 'HH:mm',
				axisFormat: 'HH:mm',
				titleFormat: {
					week: 'd[ yyyy] { -[ MMM] d MMM yyyy}',
					day: 'dddd, d MMM yyyy'
				},
				lazyFetching: true,
				start: {{ strtotime('-2 Months') }},
				end: {{ strtotime('-1 Month') }},
				events: '/kalenderAkademik/event'
			});
		}
		

	</script>

@stop