@extends('app')

@section('content')

	<h1>Tambah Riwayat Kepegawaian</h1>
	<hr />

	@include('riwayatKepegawaian/_form', ['method' => 'POST', 'url' => 'riwayatKepegawaian'])

@stop