@extends('psb')

@section('content')

	<div class="pull-right">
		<a href="/psb/daftar" class="btn btn-success @if (Auth::user()->role !== 'pendaftaran' && Auth::user()->role !== 'admin') hidden @endif"><span class="fa fa-user-plus"></span> Daftarkan Calon Siswa Baru</a>
		<a href="/psb/admin" class="btn btn-success"><span class="fa fa-refresh"></span> Refresh Data</a>
	</div>

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

	<br />

	@if (Auth::user()->role !== 'pendaftar')
		{!! Form::open(['class' => 'form-inline']) !!}
			<strong>Aksi: </strong>
			{!! Form::select('aksi', App\Psb::aksiList(), null, ['class' => 'form-control']) !!}
			<a class="btn btn-success tombol-aksi">Submit</a>
		{!! Form::close() !!}
		<hr />
	@endif

	<!-- Tab panes -->
	<div class="tab-content">
		@foreach (\App\Psb::jenjangList() as $k => $v)
		@if ($k > 0)
		<div role="tabpanel" class="tab-pane @if ($k == 1) active @endif" id="{{$k}}">
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

		$('.tombol-aksi').click(function() {
			if (confirm('Anda yakin?')) {

				var url = $('[name=aksi]').val();
				var id = $('[name=id]:checked').val();
				var url = url + id;

				$.ajax({
					url: url,
					type: 'GET',
					dataType: 'json',
					success: function(j) {

						if (j.success == true) {
							$('#list'+j.jenjang).html(j.html);
							$('#psb-list-'+j.jenjang).DataTable({"order": [[ 1, "asc" ]]});
						} else {
							alert(j.message)
						}

					}
				});

			}

			return false;
		});

		$('.tombol-hapus').click(function() {

			if (confirm('Anda yakin?')) {

				$.ajax({
					url: this.href,
					type: 'GET',
					dataType: 'json',
					success: function(j) {

						if (j.success == true) {
							$('#list'+j.jenjang).html(j.html);
							$('#psb-list-'+j.jenjang).DataTable({"order": [[ 1, "asc" ]]});
						} else {
							alert(j.message)
						}

					}
				});
			}

			return false;

		});

		$('#psb-list-1, #psb-list-2, #psb-list-3, #psb-list-4, #psb-list-5').DataTable({"order": [[ 1, "asc" ]]});

		// {pageLength: 3} ==> for datatables

	</script>

@stop
