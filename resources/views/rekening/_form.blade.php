{!! Form::model($rekening, ['url' => $url, 'class' => 'form-horizontal', 'method' => $method]) !!}

	<div class="form-group">
		{!! Form::label('bank', 'Bank:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('bank', $rekening->bank, ['class' => 'form-control', 'placeholder' => 'Bank']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('pemegang', 'Pemegang:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('pemegang', $rekening->pemegang, ['class' => 'form-control', 'placeholder' => 'Pemegang']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('nomor', 'Nomor:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('nomor', $rekening->nomor, ['class' => 'form-control', 'placeholder' => 'Nomor']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('keterangan', 'Keterangan:', ['class' => 'col-md-2 control-label']) !!}
		<div class="col-md-10">
			{!! Form::text('keterangan', $rekening->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
		</div>
	</div>

	<hr />

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		</div>
	</div>

{!! Form::close() !!}