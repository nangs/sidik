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

		<div class="form-group">
			{!! Form::label('psb[jenjang]', 'Jenjang:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[jenjang]', App\Psb::jenjangList(), $psb->jenjang, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[tingkat]', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[tingkat]', App\Psb::tingkatList(), $psb->tingkat, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[metode_pembayaran]', 'Metode Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[metode_pembayaran]', App\Psb::metodePembayaranList(), $psb->metode_pembayaran, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[tanggal_pembayaran]', 'Tanggal Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('date', 'psb[tanggal_pembayaran]', $psb->tanggal_pembayaran, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[jumlah_pembayaran]', 'Jumlah Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::input('number', 'psb[jumlah_pembayaran]', $psb->jumlah_pembayaran, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[bank_asal]', 'Bank Asal:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('psb[bank_asal]', $psb->bank_asal, ['class' => 'form-control', 'placeholder' => 'Bank Asal']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[rekening_asal]', 'Nomor Rekening Asal:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('psb[rekening_asal]', $psb->rekening_asal, ['class' => 'form-control', 'placeholder' => 'Nomor Rekening Asal']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[pemegang_rekening_asal]', 'Pemegang Rekening:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::text('psb[pemegang_rekening_asal]', $psb->pemegang_rekening_asal, ['class' => 'form-control', 'placeholder' => 'Pemegang Rekening Asal']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('psb[rekening_tujuan_id]', 'Rekening Tujuan:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::select('psb[rekening_tujuan_id]', 
				[null => '- Pilih Rekening Tujuan -'] + App\Rekening::selectRaw('CONCAT(bank," - ", pemegang, " - ", nomor) AS nama, id')->lists('nama', 'id')->toArray(), 
				$psb->rekening_tujuan_id, ['class' => 'form-control', 'placeholder' => 'Rekening Tujuan']) !!}
			</div>
		</div>

		<!-- <div class="form-group">
			{!! Form::label('psb[bukti_pembayaran]', 'Bukti Pembayaran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('bukti') !!}
			</div>
		</div> -->

	</div>

</div>