<table class="table table-striped table-hover">
	<tbody>

		<tr><th style="width:200px;">Status Anak</th><td>: {{ $siswa->status_anak }}</td></tr>
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