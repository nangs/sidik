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
			@foreach ($prestasi as $p)
			<tr>
				<td>{!! Form::input('number', 'prestasi['.$i.'][tahun]', $p->tahun, ['class' => 'form-control', 'placeholder' => 'Tahun']) !!}</td>
				<td>{!! Form::text('prestasi['.$i.'][lomba]', $p->lomba, ['class' => 'form-control', 'placeholder' => 'Lomba']) !!}</td>
				<td>{!! Form::input('number', 'prestasi['.$i.'][juara_ke]', $p->juara_ke, ['class' => 'form-control', 'placeholder' => 'Juara Ke']) !!}</td>
				<td>{!! Form::select('prestasi['.$i.'][tingkat]', App\PrestasiCalonSiswa::tingkatList(), $p->tingkat, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::select('prestasi['.$i.'][jenis]', App\PrestasiCalonSiswa::jenisList(), $p->jenis, ['class' => 'form-control']) !!}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
