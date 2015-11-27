@extends('blank')

@section('content')

	<h1 class="text-center">Sign Up</h1>
	<hr />

	{!! Form::open(['class' => 'form-horizontal']) !!}

		<p>{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}</p>
		<p>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}</p>
		<p>{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}</p>
		<p>{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}</p>

		<p class="text-center">{!! Form::submit('Register', ['class' => 'btn btn-success']) !!}</p>

	{!! Form::close() !!}

@stop