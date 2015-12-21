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
			@foreach ($beasiswa as $b)
			<tr>
				<td>{!! Form::select('beasiswa['.$i.'][jenis]', App\BeasiswaCalonSiswa::jenisList(), $b->jenis, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::text('beasiswa['.$i.'][sumber]', $b->sumber, ['class' => 'form-control', 'placeholder' => 'Sumber']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$i.'][tahun_mulai]', $b->tahun_mulai, ['class' => 'form-control', 'placeholder' => 'Tahun Mulai']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$i.'][tahun_selesai]', $b->tahun_selesai, ['class' => 'form-control', 'placeholder' => 'Tahun Selesai']) !!}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
