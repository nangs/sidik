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
				<th><a href="#" id="add-prestasi"><span class="fa fa-plus"></span></a></th>
			</tr>
		</thead>
		<tbody id="prestasi">
			@foreach ($calonSiswa->prestasi as $p)
			<tr>
				<td>{!! Form::input('number', 'prestasi['.$p->id.'][tahun]', $p->tahun, ['class' => 'form-control', 'placeholder' => 'Tahun']) !!}</td>
				<td>{!! Form::text('prestasi['.$p->id.'][lomba]', $p->lomba, ['class' => 'form-control', 'placeholder' => 'Lomba']) !!}</td>
				<td>{!! Form::input('number', 'prestasi['.$p->id.'][juara_ke]', $p->juara_ke, ['class' => 'form-control', 'placeholder' => 'Juara Ke']) !!}</td>
				<td>{!! Form::select('prestasi['.$p->id.'][tingkat]', App\PrestasiCalonSiswa::tingkatList(), $p->tingkat, ['class' => 'form-control']) !!}</td>
				<td>{!! Form::select('prestasi['.$p->id.'][jenis]', App\PrestasiCalonSiswa::jenisList(), $p->jenis, ['class' => 'form-control']) !!}</td>
				<td><a href="#" class="remove-prestasi"><span class="fa fa-remove"></span></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
