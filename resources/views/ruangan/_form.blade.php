{!! Form::model($ruangan, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('bangunan_id', 'Bangunan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('bangunan_id', App\InvBangunan::lists('nama','id'), $ruangan->bangunan_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kode', 'Kode:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('kode', $ruangan->kode, ['class' => 'form-control', 'placeholder' => 'Kode']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nama', 'Nama:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nama', $ruangan->nama, ['class' => 'form-control', 'placeholder' => 'Nama']) !!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-2 control-label">Luas (m<sup>2</sup>):</label>
		<div class="col-md-10">
			{!! Form::input('number', 'luas', $ruangan->luas, ['class' => 'form-control', 'placeholder' => 'Luas']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kapasitas', 'Kapasitas (orang):', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::input('number', 'kapasitas', $ruangan->kapasitas, ['class' => 'form-control', 'placeholder' => 'Kapasitas (orang)']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('penggunaan', 'Penggunaan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('penggunaan', $ruangan->penggunaan, ['class' => 'form-control', 'placeholder' => 'Penggunaan']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('penanggungjawab_id', 'Penanggungjawab:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('penanggungjawab_id', App\Karyawan::lists('nama','id'), $ruangan->penanggungjawab_id, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('kondisi', 'Kondisi:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::select('kondisi', App\InvBangunan::kondisiList(), $ruangan->kondisi, ['class' => 'form-control']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}