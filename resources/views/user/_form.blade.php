{!! Form::model($user, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group @if ($errors->has('name')) has-error @endif">
		{!! Form::label('name', 'Nama Lengkap:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
			@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
		</div>
	</div>

	<div class="form-group @if ($errors->has('email')) has-error @endif">
		{!! Form::label('email', 'Email/Username:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Username/Email']) !!}
			@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
		</div>
	</div>

	<div class="form-group @if ($errors->has('role')) has-error @endif">
		{!! Form::label('role', 'Role:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('role', [null => '- Pilih Role -'] + App\User::roleList(), $user->role, ['class' => 'form-control']) !!}
			@if ($errors->has('role')) <p class="help-block">{{ $errors->first('role') }}</p> @endif
		</div>
	</div>

	<div class="form-group @if ($errors->has('password')) has-error @endif">
		{!! Form::label('password', 'Password:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
			@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
		</div>
	</div>

	<div class="form-group @if ($errors->has('password')) has-error @endif">
		{!! Form::label('password_confirmation', 'Konfirmasi Password:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}