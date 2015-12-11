<table class="table table-striped grid" id="psb-list-{{$jenjang}}">
	<thead>
		<tr>
			<th>Nama/NISN Calon Siswa</th>
			<th>JK</th>
			<th>Tingkat</th>
			<th data-orderable="false">Metode, Tgl, Jml Pembayaran</th>
			<th data-orderable="false">Asal/Tujuan Pembayaran</th>
			<th>Status Pembayaran</th>
			<th>Status Data</th>
			<th data-orderable="false">Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($psbs as $s)
		@if($jenjang == $s->jenjang)
		<tr>
			<td>
				<a href="/psb/show/{{ $s->id }}">{{ $s->calonSiswa->nama }}</a><br />
				{{ $s->calonSiswa->nisn }}
			</td>
			<td>{{ $s->calonSiswa->jenis_kelamin == 1 ? 'L' : 'P' }}</td>
			<td>{{ App\Psb::TingkatList($s->tingkat) }}</td>
			<td>
				{{ $s->metode_pembayaran }}<br />
				<i>{{ $s->tanggal_pembayaran }}</i><br />
				<strong>{{ number_format($s->jumlah_pembayaran, 0, ',', '.') }}</strong>
			</td>
			<td>
				<strong>Dari:</strong> {{ $s->bank_asal }} - {{ $s->pemegang_rekening_asal }} - {{ $s->rekening_asal }}<br />
				<strong>Ke:</strong> {{ $s->rekeningTujuan ? $s->rekeningTujuan->bank.' - '.$s->rekeningTujuan->pemegang.' - '.$s->rekeningTujuan->nomor : '' }}
			</td>
			<td>
				@if ($s->status_pembayaran)
				<span class="label label-success">Lunas</span><br />
				<i>{{$s->waktu_verifikasi_pembayaran}}</i>
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			<td>
				@if ($s->status_verifikasi_data)
				<span class="label label-success">Lengkap</span><br />
				<i>{{$s->waktu_verifikasi_data}}</i>
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'psb/'.$s->id, 'class' => 'form-inline']) !!}
					@if ($s->status_pembayaran == 0)
	        		<a href="/psb/sudahBayar/{{ $s->id }}" class="btn btn-success bayar btn-xs">Sudah Bayar</a>
        			@endif
        			@if ($s->status_verifikasi_data == 0)
	        		<a href="/psb/dataOk/{{ $s->id }}" class="btn btn-success bayar btn-xs">Data OK</a>
        			@endif
	        		<!-- <a href="/psb/{{ $s->id }}/edit" class="btn btn-success btn-xs">Edit</a> -->
	        		<!-- {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!} -->
        		{!! Form::close() !!}
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>