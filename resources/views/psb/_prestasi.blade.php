<table class="table table-hover table-striped grid">
	<thead>
		<tr>
			<th>Tahun</th>
			<th>Lomba</th>
			<th>Juara Ke</th>
			<th>Tingkat</th>
			<th>Jenis</th>
		</tr>
	</thead>
	<tbody>
		@foreach($prestasi as $b)
		<tr>
			<td>{{$b->tahun}}</td>
			<td>{{$b->lomba}}</td>
			<td>{{$b->juara_ke}}</td>
			<td>{{\App\PrestasiCalonSiswa::tingkatList($b->tingkat)}}</td>
			<td>{{\App\PrestasiCalonSiswa::jenisList($b->jenis)}}</td>
		</tr>
		@endforeach
	</tbody>
</table>