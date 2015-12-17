<table class="table table-striped grid" id="psb-list-{{$jenjang}}">
	<thead>
		<tr>
			<th>Nama/NISN Calon Siswa</th>
			<th>JK</th>
			<th>Tingkat</th>

			@if (Auth::user()->role == 'keuangan' || Auth::user()->role == 'admin')
			<th data-orderable="false">Metode, Tgl, Jml Pembayaran</th>
			<th data-orderable="false">Asal/Tujuan Pembayaran</th>
			<th>Status Pembayaran</th>
			@endif

			@if (Auth::user()->role == 'data' || Auth::user()->role == 'admin')
			<th>Status Data</th>
			@endif

			@if (Auth::user()->role == 'test-wawancara' || Auth::user()->role == 'admin')
			<th>Status Test, Wawancara</th>
			@endif

			@if (Auth::user()->role == 'seleksi' || Auth::user()->role == 'admin')
			<th>Diterima</th>
			@endif

			<th data-orderable="false" style="width:150px;">Aksi</th>
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

			@if (Auth::user()->role == 'keuangan' || Auth::user()->role == 'admin')
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
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			@endif

			@if (Auth::user()->role == 'data' || Auth::user()->role == 'admin')
			<td>
				@if ($s->status_verifikasi_data)
				<span class="label label-success">Lengkap</span><br />
				<!-- <i>{{$s->waktu_verifikasi_data}}</i> -->
				@else
				<span class="label label-default">Belum Diverifikasi</span>
        		@endif
			</td>
			@endif

			@if (Auth::user()->role == 'test-wawancara' || Auth::user()->role == 'admin')
			<td>
				@if ($s->status_test)
				<span class="label label-success">Sudah Test</span><br />
				@else
				<span class="label label-default">Belum Test</span>
        		@endif
			</td>
			@endif

			@if (Auth::user()->role == 'seleksi' || Auth::user()->role == 'admin')
			<td>
				@if ($s->status == 1)
				<span class="label label-success">Ya</span><br />
				@elseif ($s->status == 2)
				<span class="label label-danger">Tidak</span>
				@else
				<span class="label label-default">Belum Dikonfirmasi</span>
        		@endif
			</td>
			@endif

			<td>
				{!! Form::open(['method' => 'DELETE', 'url' => 'psb/'.$s->id, 'class' => 'form-inline']) !!}
					<div class="btn-group">
						@if ($s->status_pembayaran == 0 && (Auth::user()->role == 'keuangan' || Auth::user()->role == 'admin'))
		        		<a href="/psb/sudahBayar/{{ $s->id }}" class="btn btn-success bayar btn-sm">Sudah Bayar</a>
						
	        			@elseif ($s->status_verifikasi_data == 0 && (Auth::user()->role == 'data' || Auth::user()->role == 'admin'))
		        		<a href="/psb/dataOk/{{ $s->id }}" class="btn btn-success bayar btn-sm">Data OK</a> 

	        			@elseif ($s->status_test == 0 && (Auth::user()->role == 'test-wawancara' || Auth::user()->role == 'admin'))
		        		<a href="/psb/testOk/{{ $s->id }}" class="btn btn-success bayar btn-sm">Test OK</a> 

	        			@elseif ($s->status_test == 1 && $s->status == 0 && (Auth::user()->role == 'seleksi' || Auth::user()->role == 'admin'))
		        		<a href="/psb/diterima/{{ $s->id }}" class="btn btn-success bayar btn-sm">Terima</a> 
		        		<a href="/psb/ditolak/{{ $s->id }}" class="btn btn-danger bayar btn-sm">Tolak</a>
	        			@endif

	        			@if (Auth::user()->role == 'admin')
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm delete']) !!}
		        		@endif

	        		</div>
        		{!! Form::close() !!}
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>