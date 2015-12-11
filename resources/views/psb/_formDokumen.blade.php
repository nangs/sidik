<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Dokumen Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group @if ($errors->has('rapor')) has-error @endif">
			{!! Form::label('', 'Rapor 2 Semester Terakhir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('rapor') !!}
				@if ($errors->has('rapor')) <p class="help-block">{{ $errors->first('rapor') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('akta')) has-error @endif">
			{!! Form::label('', 'Akta Kelahiran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('akta') !!}
				@if ($errors->has('akta')) <p class="help-block">{{ $errors->first('akta') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('kk')) has-error @endif">
			{!! Form::label('', 'Kartu Keluarga:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('kk') !!}
				@if ($errors->has('kk')) <p class="help-block">{{ $errors->first('kk') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('foto')) has-error @endif">
			{!! Form::label('', 'Pas Foto:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('foto') !!}
				@if ($errors->has('foto')) <p class="help-block">{{ $errors->first('foto') }}</p> @endif
			</div>
		</div>
		<div class="form-group @if ($errors->has('sk_sehat')) has-error @endif">
			{!! Form::label('', 'SK Sehat dari RSUD:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('sk_sehat') !!}
				<p class="help-block">Wajib dilengkapi tes laboratorium untuk HbSAg/Hepatitis B</p>
				@if ($errors->has('sk_sehat')) <p class="help-block">{{ $errors->first('sk_sehat') }}</p> @endif
			</div>
		</div>
		
	</div>

</div>