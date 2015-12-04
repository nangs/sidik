<div id="kalender"></div>
<div id="chart"></div>



@section('css')
	
	<link href="/fullcalendar/fullcalendar.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/fullcalendar/fullcalendar.min.js"></script>

	<script type="text/javascript">
		
		$('#kalender').fullCalendar({
			// viewDisplay   : function(view) {
		 //      var now = new Date(); 
		 //      var end = new Date();
		 //      end.setMonth(now.getMonth() + 11); //Adjust as needed

		 //      var cal_date_string = view.start.getMonth()+'/'+view.start.getFullYear();
		 //      var cur_date_string = now.getMonth()+'/'+now.getFullYear();
		 //      var end_date_string = end.getMonth()+'/'+end.getFullYear();

		 //      if(cal_date_string == cur_date_string) { jQuery('.fc-button-prev').addClass("fc-state-disabled"); }
		 //      else { jQuery('.fc-button-prev').removeClass("fc-state-disabled"); }

		 //      if(end_date_string == cal_date_string) { jQuery('.fc-button-next').addClass("fc-state-disabled"); }
		 //      else { jQuery('.fc-button-next').removeClass("fc-state-disabled"); }
		 //    },
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

	</script>

@stop