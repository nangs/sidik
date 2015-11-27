@extends('app')

@section('content')

	<h1>Update Riwayat Kepegawaian</h1>
	<hr />

	@include('riwayatKepegawaian/_form', ['method' => 'PATCH', 'url' => 'riwayatKepegawaian/'.$riwayatKepegawaian->id])

@stop