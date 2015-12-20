<table class="table table-striped table-hover">
	<tbody>

		<tr><th style="width:200px;">Nama Lengkap</th><td>: {{ $calonSiswa->nama }}</td></tr>
		<tr><th>Jenjang</th><td>: {{ \App\Psb::jenjangList($psb->jenjang) }}</td></tr>
		<tr><th>Tingkat</th><td>: {{ \App\Psb::tingkatList($psb->tingkat) }}</td></tr>
		<tr><th>NIS</th><td>: {{ $calonSiswa->nis }}</td></tr>
		<tr><th>NISN</th><td>: {{ $calonSiswa->nisn }}</td></tr>
		<tr><th>NIK</th><td>: {{ $calonSiswa->nik }}</td></tr>
		<tr><th>Tempat, Tanggal Lahir</th><td>: {{ $calonSiswa->tempat_lahir }}, {{ $calonSiswa->tanggal_lahir }}</td></tr>
		<tr><th>Umur</th><td>: {{ $calonSiswa->umur() }}</td></tr>
		<tr><th>Jenis Kelamin</th><td>: {{ $calonSiswa->jns_kelamin ? 'Laki - Laki' : 'Perempuan' }}</td></tr>
		<tr><th>Jumlah Saudara</th><td>: {{ $calonSiswa->jumlah_saudara }} orang</td>
		<tr><th>Tinggi Badan</th><td>: {{ $calonSiswa->tinggi_badan }} cm</td>
		<tr><th>Berat Badan</th><td>: {{ $calonSiswa->berat_badan }} kg</td>
		<tr><th>Berkebutuhan Khusus</th><td>: {{ \App\CalonSiswa::kebutuhanKhususList($calonSiswa->berkebutuhan_khusus) }}</td>
		</tr>

	</tbody>
</table>
