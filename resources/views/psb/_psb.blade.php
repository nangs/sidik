<table class="table table-striped">
	<tbody>
		<tr><th style="width:250px;">Tahun Ajaran</th><td>: {{ $psb->tahun_ajaran }}</td></tr>
		<tr><th>Jenjang</th><td>: {{ \App\Psb::jenjangList($psb->jenjang) }}</td></tr>
		<tr><th>Tingkat</th><td>: {{ \App\Psb::tingkatList($psb->tingkat) }}</td></tr>
		<tr><th>Metode Pembayaran</th><td>: {{ \App\Psb::metodePembayaranList($psb->metode_pembayaran) }}</td></tr>
		<tr><th>Jumlah Pembayaran</th><td>: Rp {{ number_format($psb->jumlah_pembayaran, 0, ',', '.') }}</td></tr>
		<tr><th>Rekening Asal Pembayaran</th><td>: {{ $psb->bank_asal }} - {{ $psb->pemegang_rekening_asal }} - {{ $psb->rekening_asal }}</td></tr>
		<tr><th>Rekening Tujuan Pembayaran</th><td>: {{ $psb->rekeningTujuan ? $psb->rekeningTujuan->bank.' - '.$psb->rekeningTujuan->pemegang.' - '.$psb->rekeningTujuan->nomor : '' }}</td></tr>
		<tr><th>Status Pembayaran</th>
			<td>: @if ($psb->status_pembayaran)
					<span class="label label-success">Lunas</span> {{$psb->waktu_verifikasi_pembayaran}}
					@else
					<span class="label label-default">Belum Diverifikasi</span>
	        		@endif
	        </td>
        </tr>
	</tbody>
</table>