@extends('app')

@section('content')

	<h1>{{ $ruangan->kode }}: {{ $ruangan->nama }}</h1>
	<hr />

	<div class="row">
		<div class="col-md-5">

			<!-- <div class="panel panel-default"> -->
				<table class="table table-striped table-hover">
					<tbody>
							<tr><th style="width:150px;">Kode</th><td>: {{ $ruangan->kode }}</td></tr>
							<tr><th>Nama</th><td>: {{ $ruangan->nama }}</td></tr>
							<tr><th>Bangunan</th><td>: {{ $ruangan->bangunan->nama }}</td></tr>
							<tr><th>Luas</th><td>: {{ $ruangan->luas }} (m<sup>2</sup>)</td></tr>
							<tr><th>Kapasitas</th><td>: {{ $ruangan->kapasitas }} orang</td></tr>
							<tr><th>Penggunaan</th><td>: {{ $ruangan->penggunaan }}</td></tr>
							<tr><th>Penanggungjawab</th><td>: {{ $ruangan->penanggungjawab->nama }}</td></tr>
							<tr><th>Kondisi</th><td>: {{ $ruangan->kondisi }}</td></tr>
					</tbody>
				</table>
			<!-- </div> -->

		</div>

		<div class="col-md-7">
			
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Merk</th>
						<th>Kondisi</th>
					</tr>
				</thead>
				<tbody>
					<!-- foreach -->
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<!-- endforeach -->
				</tbody>
			</table>

		</div>
	</div>
	

@stop