<table class="table table-striped" id="tagihan-list">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Tahun Ajaran</th>
			<th>Semester</th>
			<th>Bulan</th>
			<th>Jenis Tagihan</th>
			<th>Jumlah</th>
			<th>Jatuh Tempo</th>
			<th>Status</th>
			<th>Tanggal Bayar</th>
			<th>Keterangan</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($siswa->tagihans as $k)
		<tr>
			<td>{{ $k->nomor }}</td>
			<td>{{ $k->ta->periode }}</td>
			<td>{{ $k->semester }}</td>
			<td>{{ App\Tagihan::bulan[$k->bulan] }}</td>
			<td>{{ $k->jenis }}</td>
			<td>{{ number_format($k->jumlah, 0, ',', '.') }}</td>
			<td>{{ $k->jatuh_tempo }}</td>
			<td>{!! $k->status ? '<span class="label label-success">Lunas</span>' : '<span class="label label-danger">Belum Lunas</span>' !!}</td>
			<td>{{ $k->tanggal_bayar }}</td>
			<td>{{ $k->keterangan }}</td>
		</tr>
		@endforeach
	</tbody>
</table>