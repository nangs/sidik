<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Asal Sekolah</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('asal_sekolah[nama]', 'Nama Sekolah:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[nama]', $asalSekolah->nama, ['class' => 'form-control', 'placeholder' => 'Nama Sekolah']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[nss]', 'NSS:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[nss]', $asalSekolah->nss, ['class' => 'form-control', 'placeholder' => 'NSS']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[npsn]', 'NPSN:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[npsn]', $asalSekolah->npsn, ['class' => 'form-control', 'placeholder' => 'NPSN']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[alamat]', 'Alamat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[alamat]', $asalSekolah->alamat, ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[kecamatan]', 'Kecamatan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[kecamatan]', $asalSekolah->kecamatan, ['class' => 'form-control', 'placeholder' => 'Kecamatan']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[kota]', 'Kota:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[kota]', $asalSekolah->kota, ['class' => 'form-control', 'placeholder' => 'Kota']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('asal_sekolah[propinsi]', 'Propinsi:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('asal_sekolah[propinsi]', $asalSekolah->propinsi, ['class' => 'form-control', 'placeholder' => 'Propinsi']) !!}
			</div>
		</div>

	</div>

</div>