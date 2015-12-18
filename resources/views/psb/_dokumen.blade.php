<table class="table table-hover table-striped">
	<tbody>
		<tr>
			<th style="width:170px;">Rapor 2 Semester Terakhir</th>
			<td>: {{$psb->rapor ? 'Ada' : 'Tidak Ada'}}</td>
		</tr>
		<tr>
			<th style="width:170px;">Akta Kelahiran</th>
			<td>: {{$psb->akta ? 'Ada' : 'Tidak Ada'}}</td>
		</tr>
		<tr>
			<th style="width:170px;">Kartu Keluarga</th>
			<td>: {{$psb->kk ? 'Ada' : 'Tidak Ada'}}</td>
		</tr>
		<tr>
			<th style="width:170px;">Pas Foto</th>
			<td>: {{$psb->foto ? 'Ada' : 'Tidak Ada'}}</td>
		</tr>
		<tr>
			<th style="width:170px;">SK Sehat dari RSUD</th>
			<td>: {{$psb->sk_sehat ? 'Ada' : 'Tidak Ada'}}</td>
		</tr>
	</tbody>
</table>