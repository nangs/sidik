<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Prestasi Calon Siswa</h3>
	</div>

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Tahun</th>
				<th>Lomba</th>
				<th>Juara ke</th>
				<th>Tingkat</th>
				<th>Jenis</th>
			</tr>
		</thead>
		<tbody>
			@for ($i=0;$i<5;$i++)
			<tr>
				<td>{!! Form::input('number', 'prestasi[tahun][]', $prestasi->tahun, ['class' => 'form-control', 'placeholder' => 'Tahun']) !!}</td>
				<td>{!! Form::text('prestasi[lomba][]', $prestasi->lomba, ['class' => 'form-control', 'placeholder' => 'Lomba']) !!}</td>
				<td>{!! Form::input('number', 'prestasi[juara_ke][]', $prestasi->juara_ke, ['class' => 'form-control', 'placeholder' => 'Juara Ke']) !!}</td>
				<td>{!! Form::select('prestasi[tingkat][]', App\PrestasiCalonSiswa::tingkatList(), $prestasi->tingkat, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::select('prestasi[jenis][]', App\PrestasiCalonSiswa::jenisList(), $prestasi->jenis, ['class' => 'form-control']) !!}</td>
			</tr>
			@endfor
		</tbody>
	</table>

</div>

