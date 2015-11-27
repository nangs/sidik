@extends('app')

@section('content')
	
	<a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-success pull-right">Edit Data Siswa</a>

	<h1>Detail Siswa : {{ $siswa->nama }}</h1>
	<hr />

	<div class="row">
		<div class="col-md-3">
			<img src="/uploads/{{ $siswa->foto }}" class="img img-thumbnail" />
		</div>
		<div class="col-md-9">
			
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Data Pribadi</a></li>
				<li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Kewarganegaraan</a></li>
				<li role="presentation"><a href="#3" aria-controls="2" role="tab" data-toggle="tab">Data Keluarga</a></li>
				<li role="presentation"><a href="#4" aria-controls="3" role="tab" data-toggle="tab">Data Orang Tua/Wali</a></li>
				<li role="presentation"><a href="#5" aria-controls="4" role="tab" data-toggle="tab">Alamat</a></li>
				<li role="presentation"><a href="#6" aria-controls="4" role="tab" data-toggle="tab">Jasmani & Kesehatan</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="1">
					<br />
					@include('siswa._dataPribadi')
				</div>

				<div role="tabpanel" class="tab-pane" id="2">
					<br />
					@include('siswa._kewarganegaraan')
				</div>

				<div role="tabpanel" class="tab-pane" id="3">
					<br />
					@include('siswa._keluarga')
				</div>

				<div role="tabpanel" class="tab-pane" id="4">
					<br />
					@include('siswa._dataIbu')
				</div>

				<div role="tabpanel" class="tab-pane" id="5">
					<br />
					@include('siswa._alamat')
				</div>

				<div role="tabpanel" class="tab-pane" id="6">
					<br />
					@include('siswa._jasmani')
				</div>

			</div>

		</div>
	</div>

@stop