<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Asal Sekolah</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('asalSekolah[nama]', 'Nama Sekolah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[nama]', $asalSekolah->nama, ['class' => 'form-control', 'placeholder' => 'Nama Sekolah']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[nss]', 'NSS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[nss]', $asalSekolah->nss, ['class' => 'form-control', 'placeholder' => 'NSS']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[npsn]', 'NPSN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[npsn]', $asalSekolah->npsn, ['class' => 'form-control', 'placeholder' => 'NPSN']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[alamat]', $asalSekolah->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[kecamatan]', $asalSekolah->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[kota]', 'Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[kota]', $asalSekolah->kota, ['class' => 'form-control', 'placeholder' => 'Kota']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asalSekolah[propinsi]', 'Propinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asalSekolah[propinsi]', $asalSekolah->propinsi, ['class' => 'form-control', 'placeholder' => 'Propinsi']) !!}
			</div>
		</div>

	</div>

</div>