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
				<th><a href="#" id="add-beasiswa"><span class="fa fa-plus"></span></a></th>
			</tr>
		</thead>
		<tbody id="beasiswa">
			@foreach ($calonSiswa->beasiswa as $b)
			<tr>
				<td>{!! Form::select('beasiswa['.$b->id.'][jenis]', App\BeasiswaCalonSiswa::jenisList(), $b->jenis, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::text('beasiswa['.$b->id.'][sumber]', $b->sumber, ['class' => 'form-control', 'placeholder' => 'Sumber']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$b->id.'][tahun_mulai]', $b->tahun_mulai, ['class' => 'form-control', 'placeholder' => 'Tahun Mulai']) !!}</td>
				<td>{!! Form::input('number', 'beasiswa['.$b->id.'][tahun_selesai]', $b->tahun_selesai, ['class' => 'form-control', 'placeholder' => 'Tahun Selesai']) !!}</td>
				<td><a href="#" class="remove-beasiswa"><span class="fa fa-remove"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
