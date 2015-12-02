<table class="table table-striped table-hover">
	<tbody>

		<tr><th style="width:200px;">NIS</th><td>: {{ $siswa->nis }}</td></tr>
		<tr><th>NISN</th><td>: {{ $siswa->nisn }}</td></tr>
		<tr><th>Nama Lengkap</th><td>: {{ $siswa->nama }}</td></tr>
		<tr><th>Nama Panggilan</th><td>: {{ $siswa->panggilan }}</td></tr>
		<tr><th>Tempat, Tanggal Lahir</th><td>: {{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</td></tr>
		<tr><th>Umur</th><td>: {{ $siswa->umur() }}</td></tr>
		<tr><th>Jenis Kelamin</th><td>: {{ $siswa->jns_kelamin ? 'Laki - Laki' : 'Perempuan' }}</td></tr>
		<tr><th>Aktif</th><td>: {!! $siswa->active ? '<span class="label label-success">Y</span>' : '<span class="label label-danger">T</span>' !!}</td></tr>
		<tr><th>Kewarganegaraan</th><td>: {{ $siswa->wn }}</td></tr>
		<tr><th>Suku</th><td>: {{ $siswa->suku }}</td></tr>
		<tr><th>Bahasa Sehari-hari</th><td>: {{ $siswa->bahasa }}</td></tr>
		<tr><th>Status Anak</th><td>: {{ $siswa->status_anak }}</td></tr>
		<tr><th>Anak Ke</th><td>: {{ $siswa->anak_ke }} ({{ $siswa->urutan()[$siswa->anak_ke] }})</td></tr>
		<tr>
			<th>Jumlah Saudara</th>
			<td>
				: Kandung : {{ $siswa->sdr_kandung }}  
				Tiri : {{ $siswa->sdr_tiri }}  
				Angkat : {{ $siswa->sdr_angkat }}  
			</td>
		</tr>

	</tbody>
</table>