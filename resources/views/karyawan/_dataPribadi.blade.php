<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Data Pribadi</h3>
	</div>
	<table class="table table-striped table-hover">
		<tbody>

			<tr><th style="width:200px;">Nama</th><td>: {{ $karyawan->nama }}</td></tr>
			<tr><th>NIK</th><td>: {{ $karyawan->nik }}</td></tr>
			<tr><th>Tempat, Tanggal Lahir</th><td>: {{ $karyawan->tempat_lahir }}, {{ $karyawan->tgl_lahir }}</td></tr>
			<tr><th>Jenis Kelamin</th><td>: {{ $karyawan->jns_kelamin ? 'Laki - Laki' : 'Perempuan' }}</td></tr>
			<tr><th>Golongan Darah</th><td>: {{ $karyawan->gol_darah }}</td></tr>
			<tr><th>Status Pernikahan</th><td>: {{ $karyawan->nikah ? 'Menikah' : 'Belum Menikah' }}</td></tr>
			<tr><th>Jumlah Anak</th><td>: {{ $karyawan->jml_anak }}</td></tr>
			<tr><th>Kota Asal</th><td>: {{ $karyawan->kota_asal }}</td></tr>
			<tr><th>Alamat</th><td>: {{ $karyawan->alamat }}</td></tr>
			<tr><th>Telepon/HP</th><td>: {{ $karyawan->phone }}</td></tr>
			<tr><th>Email</th><td>: <a href="mailto:{{ $karyawan->email }}">{{ $karyawan->email }}</a></td></tr>
			<tr><th>Golongan</th><td>: {{ $karyawan->golongan }}</td></tr>

		</tbody>
	</table>
</div>