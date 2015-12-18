@extends('psb')

@section('content')
	
	<a href="/psb/admin" class="btn btn-success pull-right"><span class="fa fa-refresh"></span> Refresh Daftar</a>

	<h1>Daftar Calon Satri Baru</h1>
	<hr />

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0)
		<li role="presentation" class="@if ($k == 1) active @endif">
			<a href="#{{$k}}" aria-controls="{{$k}}" role="tab" data-toggle="tab">
				{{$v}} <span class="badge">{{\App\Psb::where('jenjang', $k)->sekarang()->count('id')}}</span>
			</a>
		</li>
		@endif
		@endforeach
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0)
		<div role="tabpanel" class="tab-pane @if ($k == 1) active @endif" id="{{$k}}">
			<br />
			<div id="list{{$k}}">
				@include('psb._list', ['jenjang' => $k])
			</div>
		</div>
		@endif
		@endforeach
	</div>	

@stop

@section('css')
	
	<link href="/DataTables/datatables.min.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		var fungsi = function(e) {
			$(e).click(function() {
				if(confirm('Anda yakin?')) {
					// console.log(this.href);
					$.ajax({
						url: this.href,
						type: 'GET',
						dataType: 'json',
						success: function(j) {
							
							if (j.success == true) {
								$('#list'+j.jenjang).html(j.html);
								$('#psb-list-'+j.jenjang).DataTable();
								fungsi('#psb-list-'+j.jenjang+' .tombol-confirm');
							} else {
								alert(j.message)
							}
							
						}
					});

					return false;
				};

				return false;
			});
		};

		fungsi('.tombol-confirm');

		$('#psb-list-1, #psb-list-2, #psb-list-3, #psb-list-4, #psb-list-5').DataTable();

	</script>

@stop