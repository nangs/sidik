<table class="table table-hover table-striped grid">
	<thead>
		<tr>
			<th>Jenis</th>
			<th>Penyelenggara/Sumber</th>
			<th>Tahun Mulai</th>
			<th>Tahun Selesai</th>
		</tr>
	</thead>
	<tbody>
		@foreach($beasiswa as $b)
		<tr>
			<td>{{\App\BeasiswaCalonSiswa::jenisList($b->jenis)}}</td>
			<td>{{$b->sumber}}</td>
			<td>{{$b->tahun_mulai}}</td>
			<td>{{$b->tahun_selesai}}</td>
		</tr>
		@endforeach
	</tbody>
</table>