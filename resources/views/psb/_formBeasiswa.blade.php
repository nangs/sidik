<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Beasiswa Calon Siswa</h3>
	</div>

	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Jenis</th>
				<th>Penyelenggara/Sumber</th>
				<th>Tahun Mulai</th>
				<th>Tahun Selesai</th>
			</tr>
		</thead>
		<tbody>
			@for ($i=0;$i<6;$i++)
			<tr>
				<td>{!! Form::select('beasiswa['.$i.'][jenis]', App\BeasiswaCalonSiswa::jenisList(), $beasiswa->jenis, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::text('beasiswa['.$i.'][sumber]', $beasiswa->sumber, ['class' => 'form-control', 'placeholder' => 'Sumber']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$i.'][tahun_mulai]', $beasiswa->tahun_mulai, ['class' => 'form-control', 'placeholder' => 'Tahun Mulai']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$i.'][tahun_selesai]', $beasiswa->tahun_selesai, ['class' => 'form-control', 'placeholder' => 'Tahun Mulai']) !!}</td>
			</tr>
			@endfor
		</tbody>
	</table>

</div>

