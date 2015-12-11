<table class="table table-striped table-hover">
	<tbody>

		<tr><th style="width:200px;">Jenis Tinggal</th><td>: {{ \App\AlamatCalonSiswa::jenisTinggalList($alamat->jenis_tinggal) }}</td></tr>
		<tr><th>Alamat</th><td>: {{ $alamat->alamat }}</td></tr>
		<tr><th>RT/RW</th><td>: {{ $alamat->rt }}/{{ $alamat->rw }}</td></tr>
		<tr><th>Kelurahan</th><td>: {{ $alamat->kelurahan }}</td></tr>
		<tr><th>Kode Pos</th><td>: {{ $alamat->kode_pos }}</td></tr>
		<tr><th>Kecamatan</th><td>: {{ $alamat->kecamatan }}</td></tr>
		<tr><th>Kabupaten/Kota</th><td>: {{ $alamat->kota }}</td></tr>
		<tr><th>Propinsi</th><td>: {{ $alamat->provinsi }}</td></tr>
		<tr><th>Telepon/HP</th><td>: {{ $alamat->telepon_rumah }}/{{ $alamat->hp }}</td></tr>
		<tr><th>Email</th><td>: <a href="mailto:{{ $alamat->email }}">{{ $alamat->email }}</a></td></tr>
		<tr><th>Jarak Rumah Ke Sekolah</th><td>: {{ $alamat->jarak_tempat_tinggal_ke_sekolah }} km</td></tr>
		<tr><th>Transportasi Ke Sekolah</th><td>: {{ \App\AlamatCalonSiswa::transportasiList($alamat->alat_transportasi_ke_sekolah) }}</td></tr>

	</tbody>
</table>