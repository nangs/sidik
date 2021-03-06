<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Dokumen Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group @if ($errors->has('rapor')) has-error @endif">
			{!! Form::label('', 'Rapor 2 Semester Terakhir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('psb[rapor]', 1, $psb->rapor ==  1) !!} Ada &nbsp; &nbsp;
				{!! Form::radio('psb[rapor]', 0, $psb->rapor ==  0) !!} Tidak Ada
			</div>
		</div>

		<div class="form-group @if ($errors->has('akta')) has-error @endif">
			{!! Form::label('', 'Akta Kelahiran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('psb[akta]', 1, $psb->akta ==  1) !!} Ada &nbsp; &nbsp;
				{!! Form::radio('psb[akta]', 0, $psb->akta ==  0) !!} Tidak Ada
			</div>
		</div>

		<div class="form-group @if ($errors->has('kk')) has-error @endif">
			{!! Form::label('', 'Kartu Keluarga:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('psb[kk]', 1, $psb->kk ==  1) !!} Ada &nbsp; &nbsp;
				{!! Form::radio('psb[kk]', 0, $psb->kk ==  0) !!} Tidak Ada
			</div>
		</div>

		<div class="form-group @if ($errors->has('foto')) has-error @endif">
			{!! Form::label('', 'Pas Foto:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('psb[foto]', 1, $psb->foto ==  1) !!} Ada &nbsp; &nbsp;
				{!! Form::radio('psb[foto]', 0, $psb->foto ==  0) !!} Tidak Ada
			</div>
		</div>

		<div class="form-group @if ($errors->has('sk_sehat')) has-error @endif">
			{!! Form::label('', 'SK Sehat dari RSUD:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::radio('psb[sk_sehat]', 1, $psb->sk_sehat ==  1) !!} Ada &nbsp; &nbsp;
				{!! Form::radio('psb[sk_sehat]', 0, $psb->sk_sehat ==  0) !!} Tidak Ada
			</div>
		</div>
		
	</div>

</div>