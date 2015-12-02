@extends('app')

@section('content')

	<h1>Update Orang Tua/Wali Siswa : {{ $wali->nama }}</h1>
	<hr />

	@include('wali/_form', ['method' => 'PATCH', 'url' => 'wali/'.$wali->id])

@stop