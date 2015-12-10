<table class="table table-striped" id="psb-list-{{$jenjang}}">
	<thead>
		<tr>
			<th>Tingkat</th>
			<th>Nama Calon Siswa</th>
			<th>NISN Calon Siswa</th>
			<th>JK</th>
			<th data-orderable="false">Metode, Tgl, Jml Pembayaran</th>
			<th data-orderable="false">Asal/Tujuan Pembayaran</th>
			<th>Status Pembayaran</th>
			<th data-orderable="false">Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($psbs as $s)
		@if($jenjang == $s->jenjang)
		<tr>
			<td>{{ App\Psb::TingkatList()[$s->tingkat] }}</td>
			<td><a href="/calonSiswa/show/{{ $s->calonSiswa->id }}">{{ $s->calonSiswa->nama }}</a></td>
			<td>{{ $s->calonSiswa->nisn }}</td>
			<td>{{ $s->calonSiswa->jenis_kelamin == 1 ? 'L' : 'P' }}</td>
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
				<span class="label label-default">Belum Dikonfirmasi</span>
        		@endif
			</td>
			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'psb/'.$s->id, 'class' => 'form-inline']) !!}
					@if ($s->status_pembayaran == 0)
	        		<a href="/psb/sudahBayar/{{ $s->id }}" class="btn btn-info bayar btn-xs">Sudah Bayar</a>
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