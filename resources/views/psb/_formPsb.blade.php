<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Data Konfirmasi Pembayaran Formulir</h3>
	</div>

	<div class="panel-body">

		{!! Form::hidden('psb[tahun_ajaran]', App\Ta::active()->first()->periode) !!}

		<div class="form-group">
			{!! Form::label('tahun_ajaran', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('tahun_ajaran', App\Ta::active()->first()->periode, ['class' => 'form-control', 'disabled' => true]) !!}
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.jenjang')) has-error @endif">
			{!! Form::label('psb[jenjang]', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[jenjang]', App\Psb::jenjangList(), $psb->jenjang, ['class' => 'form-control', 'id' => 'jenjang']) !!}
				@if ($errors->has('psb.jenjang')) <p class="help-block">{{ $errors->first('psb.jenjang') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.tingkat')) has-error @endif">
			{!! Form::label('psb[tingkat]', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[tingkat]', App\Psb::tingkatList(), $psb->tingkat, ['class' => 'form-control', 'id' => 'tingkat']) !!}
				@if ($errors->has('psb.tingkat')) <p class="help-block">{{ $errors->first('psb.tingkat') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.metode_pembayaran')) has-error @endif">
			{!! Form::label('psb[metode_pembayaran]', 'Metode Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[metode_pembayaran]', App\Psb::metodePembayaranList(), $psb->metode_pembayaran, ['class' => 'form-control', 'id' => 'metode-pembayaran']) !!}
				@if ($errors->has('psb.metode_pembayaran')) <p class="help-block">{{ $errors->first('psb.metode_pembayaran') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.tanggal_pembayaran')) has-error @endif">
			{!! Form::label('psb[tanggal_pembayaran]', 'Tanggal Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('psb[tanggal_pembayaran]', $psb->tanggal_pembayaran, ['class' => 'form-control', 'id' => 'tglbayar']) !!}
				@if ($errors->has('psb.tanggal_pembayaran')) <p class="help-block">{{ $errors->first('psb.tanggal_pembayaran') }}</p> @endif
			</div>
		</div>

		<div class="form-group @if ($errors->has('psb.jumlah_pembayaran')) has-error @endif">
			{!! Form::label('psb[jumlah_pembayaran]', 'Jumlah Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'psb[jumlah_pembayaran]', $psb->jumlah_pembayaran, ['class' => 'form-control', 'readonly' => true]) !!}
				@if ($errors->has('psb.jumlah_pembayaran')) <p class="help-block">{{ $errors->first('psb.jumlah_pembayaran') }}</p> @endif
			</div>
		</div>

		<div id="rekening">
			<div class="form-group @if ($errors->has('psb.bank_asal')) has-error @endif">
				{!! Form::label('psb[bank_asal]', 'Bank Asal:', ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::text('psb[bank_asal]', $psb->bank_asal, ['class' => 'form-control', 'placeholder' => 'Bank Asal']) !!}
					@if ($errors->has('psb.bank_asal')) <p class="help-block">{{ $errors->first('psb.bank_asal') }}</p> @endif
				</div>
			</div>

			<div class="form-group @if ($errors->has('psb.rekening_asal')) has-error @endif">
				{!! Form::label('psb[rekening_asal]', 'Nomor Rekening Asal:', ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::text('psb[rekening_asal]', $psb->rekening_asal, ['class' => 'form-control', 'placeholder' => 'Nomor Rekening Asal']) !!}
					@if ($errors->has('psb.rekening_asal')) <p class="help-block">{{ $errors->first('psb.rekening_asal') }}</p> @endif
				</div>
			</div>

			<div class="form-group @if ($errors->has('psb.pemegang_rekening_asal')) has-error @endif">
				{!! Form::label('psb[pemegang_rekening_asal]', 'Pemegang Rekening:', ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::text('psb[pemegang_rekening_asal]', $psb->pemegang_rekening_asal, ['class' => 'form-control', 'placeholder' => 'Pemegang Rekening Asal']) !!}
					@if ($errors->has('psb.pemegang_rekening_asal')) <p class="help-block">{{ $errors->first('psb.pemegang_rekening_asal') }}</p> @endif
				</div>
			</div>

			<div class="form-group @if ($errors->has('psb.rekening_tujuan_id')) has-error @endif">
				{!! Form::label('psb[rekening_tujuan_id]', 'Rekening Tujuan:', ['class' => 'col-md-2 control-label']) !!}
				<div class="col-md-10">
					{!! Form::select('psb[rekening_tujuan_id]', 
					[null => '- Pilih Rekening Tujuan -'] + App\Rekening::selectRaw('CONCAT(bank," - ", pemegang, " - ", nomor) AS nama, id')->lists('nama', 'id')->toArray(), 
					$psb->rekening_tujuan_id, ['class' => 'form-control', 'placeholder' => 'Rekening Tujuan']) !!}
					@if ($errors->has('psb.rekening_tujuan_id')) <p class="help-block">{{ $errors->first('psb.rekening_tujuan_id') }}</p> @endif
				</div>
			</div>
		</div>

		<!-- <div class="form-group @if ($errors->has('psb.nama')) has-error @endif">
			{!! Form::label('psb[bukti_pembayaran]', 'Bukti Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('bukti') !!}
			</div>
		</div> -->

	</div>

</div>