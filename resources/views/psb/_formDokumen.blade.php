<div class="panel panel-success">

	<div class="panel-heading">
		<h3 class="panel-title">Dokumen Calon Siswa</h3>
	</div>

	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('', 'FC Rapor 2 Semester Terakhir:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('rapor') !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('', 'FC Akta Kelahiran:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('akta') !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('', 'FC Kartu Keluarga:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('kk') !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('', 'Pas Foto:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('foto') !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('', 'SK Sehat dari RSUD:', ['class' => 'col-md-2 control-label']) !!}
			<div class="col-md-10">
				{!! Form::file('sk_sehat') !!}
				<span class="text-danger">Wajib dilengkapi tes laboratorium untuk HbSAg/Hepatitis B</span>
			</div>
		</div>
		
	</div>

</div>