<div class="easyui-tabs" border="false">
        <div title="Data Calon Santri" style="padding:10px 0">
            <table class="">
            	<tbody>

            		<tr><td style="widtd:170px;">Nama Lengkap</td><td>: {{ $calonSiswa->nama }}</td></tr>
            		<tr><td>Jenjang</td><td>: {{ \App\Psb::jenjangList($psb->jenjang) }}</td></tr>
            		<tr><td>Tingkat</td><td>: {{ \App\Psb::tingkatList($psb->tingkat) }}</td></tr>
            		<tr><td>NIS</td><td>: {{ $calonSiswa->nis }}</td></tr>
            		<tr><td>NISN</td><td>: {{ $calonSiswa->nisn }}</td></tr>
            		<tr><td>NIK</td><td>: {{ $calonSiswa->nik }}</td></tr>
            		<tr><td>Tempat, Tanggal Lahir</td><td>: {{ $calonSiswa->tempat_lahir }}, {{ $calonSiswa->tanggal_lahir }}</td></tr>
            		<tr><td>Umur</td><td>: {{ $calonSiswa->umur() }}</td></tr>
            		<tr><td>Jenis Kelamin</td><td>: {{ $calonSiswa->jenis_kelamin ? 'Laki - Laki' : 'Perempuan' }}</td></tr>
            		<tr><td>Jumlah Saudara</td><td>: {{ $calonSiswa->jumlah_saudara }} orang</td>
            		<tr><td>Tinggi Badan</td><td>: {{ $calonSiswa->tinggi_badan }} cm</td>
            		<tr><td>Berat Badan</td><td>: {{ $calonSiswa->berat_badan }} kg</td>
            		<tr><td>Berkebutuhan Khusus</td><td>: {{ \App\CalonSiswa::kebutuhanKhususList($calonSiswa->berkebutuhan_khusus) }}</td>
            		</tr>

            	</tbody>
            </table>
        </div>
        <div title="My Documents" style="padding:10px">
            <ul class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true"></ul>
        </div>
        <div title="Help" data-options="iconCls:'icon-help',closable:true" style="padding:10px">
            This is the help content.
        </div>
    </div>
