<table class="table table-striped table-hover">
	<tbody>

		<tr><th style="width:200px;">Status Anak</th><td>: {{ $siswa->status_anak }}</td></tr>
		<tr><th>Anak Ke</th><td>: {{ $siswa->anak_ke }}</td></tr>
		<tr>
			<th>Jumlah Saudara</th>
			<td>
				: {{ $siswa->sdr_kandung }} Kandung 
				{{ $siswa->sdr_tiri }} Tiri 
				{{ $siswa->sdr_angkat }} Angkat 
			</td>
		</tr>

	</tbody>
</table>