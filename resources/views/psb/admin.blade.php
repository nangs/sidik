@extends('psb')

@section('content')
	
	<a href="/psb/admin" class="btn btn-success pull-right"><span class="fa fa-refresh"></span> Refresh Daftar</a>

	<h1>Daftar Calon Satri Baru</h1>
	<hr />

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#1" aria-controls="1" role="tab" data-toggle="tab">
				SD <span class="badge">{{\App\Psb::sekarang()->SD()->count('id')}}</span>
			</a>
		</li>
		<li role="presentation">
			<a href="#5" aria-controls="5" role="tab" data-toggle="tab">
				SMP <span class="badge">{{\App\Psb::sekarang()->SMP()->count('id')}}</span>
			</a>
		</li>
		<li role="presentation">
			<a href="#6" aria-controls="6" role="tab" data-toggle="tab">
				SMA <span class="badge">{{\App\Psb::sekarang()->SMA()->count('id')}}</span>
			</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="1">
			<br />
			@include('psb._list', ['jenjang' => 1])
		</div>

		<div role="tabpanel" class="tab-pane" id="5">
			<br />
			@include('psb._list', ['jenjang' => 2])
		</div>

		<div role="tabpanel" class="tab-pane" id="6">
			<br />
			@include('psb._list', ['jenjang' => 3])
		</div>
	</div>	

@stop

@section('css')
	
	<link href="/DataTables/datatables.min.css" rel="stylesheet">
	
@stop

@section('script')

	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>

	<script type="text/javascript">
		
		$('.delete, .bayar').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

		$('#psb-list-1, #psb-list-2, #psb-list-3').DataTable();

	</script>

@stop