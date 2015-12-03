@extends('app')

@section('content')

	<h1>Input Jadwal Pelajaran</h1>
	<hr />

	@include('jadwalPelajaran/_formTabular', ['method' => 'POST', 'url' => '/kelas/storeJadwal/'.$kelas->id])

@stop