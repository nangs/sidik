@extends('login')

@section('content')

	<h3 class="text-center">Ma'had As Sunnah Login</h3>
	<hr />

	{!! Form::open(['class' => 'form-horizontal']) !!}

		<p>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}</p>
		<p>{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}</p>
		<p class="text-center">{!! Form::checkbox('remember') !!} Remember Me</p>

		<!-- <hr /> -->

		<p class="text-center">
			{!! Form::submit('Login', ['class' => 'btn btn-success form-control']) !!}
			<!-- <a href="/password/email" class="btn btn-default">Forgot Password</a> -->
		</p>

	{!! Form::close() !!}

@stop