@extends('app')

@section('content')

	<h1>Tambah Bagian</h1>
	<hr />

	@include('bagian/_form', ['method' => 'POST', 'url' => 'bagian'])

@stop