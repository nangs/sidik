<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Data User (Untuk melihat status pendaftaran)</h3>
	</div>

	<div class="panel-body">
		<div class="form-group @if ($errors->has('name')) has-error @endif">
			{!! Form::label('name', 'Nama Pendaftar:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
				@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('email')) has-error @endif">
			{!! Form::label('email', 'Email Pendaftar:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
				@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('password')) has-error @endif">
			{!! Form::label('password]', 'Password:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::password('password', ['class' => 'form-control']) !!}
				@if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('password')) has-error @endif">
			{!! Form::label('password_confirmation', 'Konfirmasi Password:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
				@if ($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
			</div>
		</div>
	</div>
</div>
