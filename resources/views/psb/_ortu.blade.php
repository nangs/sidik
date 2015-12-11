<table class="table table-striped">
	<tbody>
		<tr><th style="width:200px;">Nama</th><td>: {{ $ortu->nama }}</td></tr>
		<tr><th>Pekerjaan</th><td>: {{ \App\OrangTuaCalonSiswa::pekerjaanList($ortu->pekerjaan) }}</td></tr>
		<tr><th>Pendidikan</th><td>: {{ \App\OrangTuaCalonSiswa::pendidikanList($ortu->pendidikan) }}</td></tr>
		<tr><th>Penghasilan Bulanan</th><td>: {{ \App\OrangTuaCalonSiswa::penghasilanList($ortu->penghasilan_bulanan) }}</td></tr>
		<tr><th>Alamat</th><td>: {{ $ortu->alamat }}</td></tr>
		<tr><th>RT/RW</th><td>: {{ $ortu->rt }}/{{ $ortu->rw }}</td></tr>
		<tr><th>Kelurahan</th><td>: {{ $ortu->kelurahan }}</td></tr>
		<tr><th>Kode Pos</th><td>: {{ $ortu->kode_pos }}</td></tr>
		<tr><th>Kecamatan</th><td>: {{ $ortu->kecamatan }}</td></tr>
		<tr><th>Kabupaten/Kota</th><td>: {{ $ortu->kota }}</td></tr>
		<tr><th>Propinsi</th><td>: {{ $ortu->provinsi }}</td></tr>
		<tr><th>Telepon/HP</th><td>: {{ $ortu->telepon_rumah }}/{{ $ortu->hp }}</td></tr>
		<tr><th>Email</th><td>: <a href="mailto:{{ $ortu->email }}">{{ $ortu->email }}</a></td></tr>
	</tbody>
</table>