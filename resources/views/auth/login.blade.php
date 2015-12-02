@extends('blank')

@section('content')
	
	<div class="row">
		
		<div class="col-md-7 col-md-offset-1">
			<img src="/images/assunnah1.jpg" style="max-width:100%;" />
		</div>

		<div class="col-md-3">

			<h3>Ihya' As Sunnah - Login</h3>
			<hr />

			{!! Form::open(['class' => 'form-horizontal']) !!}

				<p>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}</p>
				<p>{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}</p>
				<p>{!! Form::checkbox('remember') !!} Remember Me</p>

				<hr />

				<p>
					{!! Form::submit('Login', ['class' => 'btn btn-success']) !!}
					<!-- <a href="/password/email" class="btn btn-default">Forgot Password</a> -->
				</p>

			{!! Form::close() !!}

		</div>

	</div>
	

@stop