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
			<th>Status Test, Wawancara</th>
			<th>Diterima</th>
			<th data-orderable="false">Aksi</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($psbs as $s)
		@if($jenjang == $s->jenjang)
		<tr>
			<td>
				<a href="/psb/show/{{ $s->id }}">{{ $s->calonSiswa->nama }}</a><br />
				<strong>Password:</strong> {{strtotime($s->calonSiswa->created_at)}}<br />
				<strong>NISN:</strong> {{ $s->calonSiswa->nisn }}
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
				<!-- <i>{{$s->waktu_verifikasi_pembayaran}}</i> -->
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			<td>
				@if ($s->status_verifikasi_data)
				<span class="label label-success">Lengkap</span><br />
				<!-- <i>{{$s->waktu_verifikasi_data}}</i> -->
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			<td>
				@if ($s->status_test)
				<span class="label label-success">Sudah Test</span><br />
				@else
				<span class="label label-default">Belum Test</span>
        		@endif
			</td>
			<td>
				@if ($s->status == 1)
				<span class="label label-success">Ya</span><br />
				@elseif ($s->status == 2)
				<span class="label label-danger">Tidak</span>
				@else
				<span class="label label-default">Belum Dikonfirmasi</span>
        		@endif
			</td>
			<td>
				@if (Auth::user()->role == 'admin')

				{!! Form::open(['method' => 'DELETE', 'url' => 'psb/'.$s->id, 'class' => 'form-inline']) !!}
					@if ($s->status_pembayaran == 0)
	        		<a href="/psb/sudahBayar/{{ $s->id }}" class="btn btn-success bayar btn-sm">Sudah Bayar</a>

        			@elseif ($s->status_verifikasi_data == 0)
	        		<a href="/psb/dataOk/{{ $s->id }}" class="btn btn-success bayar btn-sm">Data OK</a>

        			@elseif ($s->status_test == 0)
	        		<a href="/psb/testOk/{{ $s->id }}" class="btn btn-success bayar btn-sm">Test OK</a>

        			@elseif ($s->status_test == 1 && $s->status == 0)
	        		<a href="/psb/diterima/{{ $s->id }}" class="btn btn-success bayar btn-sm">Terima</a>
	        		<a href="/psb/ditolak/{{ $s->id }}" class="btn btn-danger bayar btn-sm">Tolak</a>
        			@endif

	        		<!-- <a href="/psb/{{ $s->id }}/edit" class="btn btn-success btn-xs">Edit</a> -->
	        		<!-- {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!} -->
        		{!! Form::close() !!}

        		@else

        			@if ($s->status_pembayaran == 1 && $s->step == 2)
	        		<a href="/psb/step2/{{ $s->id }}" class="btn btn-success btn-sm">Isi Formulir</a>
        			@endif

        		@endif
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>