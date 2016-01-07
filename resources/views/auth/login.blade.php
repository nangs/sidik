@extends('blank')

@section('content')

	<div class="row">

		<div class="col-md-7 col-md-offset-1">
			<img src="/images/assunnah1.jpg" style="max-width:100%;" />
		</div>

		<div class="col-md-3">

			<h3>{{config('app.name')}} LOGIN</h3>
			<hr />

			{!! Form::open(['class' => 'form-horizontal']) !!}

				<p>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email/Username']) !!}</p>
				<p>{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}</p>
				<p>{!! Form::checkbox('remember') !!} Remember Me</p>

				<hr />

				<p>
					<button type="submit" class="btn btn-success"><span class="fa fa-sign-in"></span> Login</button>
					<a href="/home" class="btn btn-info"><span class="fa fa-home"></span> Beranda</a>
				</p>

			{!! Form::close() !!}

		</div>

	</div>


@stop
