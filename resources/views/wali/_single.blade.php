<table class="table table-striped">
	<tbody>
		<tr><th style="width:200px;">Nama</th><td>: {{ $wali->nama }}</td></tr>
		<tr><th>Alamat</th><td>: {{ $wali->alamat }}</td></tr>
		<tr><th>Telepon</th><td>: {{ $wali->phone }}</td></tr>
		<tr><th>Email</th><td>: <a href="mailto:{{ $wali->email }}">{{ $wali->email }}</a></td></tr>
		@if ($hub == 'wali')
		<tr><th>Hubungan Keluarga</th><td>: {{ $wali->hub_keluarga }}</td></tr>
		@endif
		<tr><th>Tempat, Tanggal Lahir</th><td>: {{ $wali->tempat_lahir }}, {{ $wali->tgl_lahir }}</td></tr>
		<tr><th>Umur</th><td>: {{ $wali->umur() }}</td></tr>
		<tr><th>Agama</th><td>: {{ $wali->agama }}</td></tr>
		<tr><th>Warga Negara</th><td>: {{ $wali->wn }}</td></tr>
		<tr><th>Pendidikan Terakhir</th><td>: {{ $wali->pendidikan_terakhir }}</td></tr>
		<tr><th>Pekerjaan</th><td>: {{ $wali->pekerjaan }}</td></tr>
		<tr><th>Penghasilan</th><td>: Rp. {{ number_format($wali->penghasilan, 0, ',', '.') }}</td></tr>
		@if ($hub != 'wali')
		<tr><th>Status</th><td>: {{ $wali->status ? 'Hidup' : 'Meninggal' }}</td></tr>
		@endif
	</tbody>
</table>