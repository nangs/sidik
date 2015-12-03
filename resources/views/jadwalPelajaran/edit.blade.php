@extends('app')

@section('content')

	<h1>Update Jadwal Pelajaran</h1>
	<hr />

	@include('jadwalPelajaran/_formTabular', ['method' => 'PATCH', 'url' => 'kelas/updateJadwal/'.$kelas->id])

@stop