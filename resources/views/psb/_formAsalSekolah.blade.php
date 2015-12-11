<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Asal Sekolah</h3>
	</div>

	<div class="panel-body">

		<div class="form-group @if ($errors->has('asalSekolah.nama')) has-error @endif">
			{!! Form::label('asalSekolah[nama]', 'Nama Sekolah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[nama]', $asalSekolah->nama, ['class' => 'form-control', 'placeholder' => 'Nama Sekolah']) !!}
				@if ($errors->has('asalSekolah.nama')) <p class="help-block">{{ $errors->first('asalSekolah.nama') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.nss')) has-error @endif">
			{!! Form::label('asalSekolah[nss]', 'NSS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[nss]', $asalSekolah->nss, ['class' => 'form-control', 'placeholder' => 'NSS']) !!}
				@if ($errors->has('asalSekolah.nss')) <p class="help-block">{{ $errors->first('asalSekolah.nss') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.npsn')) has-error @endif">
			{!! Form::label('asalSekolah[npsn]', 'NPSN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[npsn]', $asalSekolah->npsn, ['class' => 'form-control', 'placeholder' => 'NPSN']) !!}
				@if ($errors->has('asalSekolah.npsn')) <p class="help-block">{{ $errors->first('asalSekolah.npsn') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.alamat')) has-error @endif">
			{!! Form::label('asalSekolah[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[alamat]', $asalSekolah->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
				@if ($errors->has('asalSekolah.alamat')) <p class="help-block">{{ $errors->first('asalSekolah.alamat') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.kecamatan')) has-error @endif">
			{!! Form::label('asalSekolah[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[kecamatan]', $asalSekolah->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
				@if ($errors->has('asalSekolah.kecamatan')) <p class="help-block">{{ $errors->first('asalSekolah.kecamatan') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.kota')) has-error @endif">
			{!! Form::label('asalSekolah[kota]', 'Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[kota]', $asalSekolah->kota, ['class' => 'form-control', 'placeholder' => 'Kota']) !!}
				@if ($errors->has('asalSekolah.kota')) <p class="help-block">{{ $errors->first('asalSekolah.kota') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('asalSekolah.propinsi')) has-error @endif">
			{!! Form::label('asalSekolah[propinsi]', 'Propinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[propinsi]', $asalSekolah->propinsi, ['class' => 'form-control', 'placeholder' => 'Propinsi']) !!}
				@if ($errors->has('asalSekolah.propinsi')) <p class="help-block">{{ $errors->first('asalSekolah.propinsi') }}</p> @endif
			</div>
		</div>

	</div>

</div>