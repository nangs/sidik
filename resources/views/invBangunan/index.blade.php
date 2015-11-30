@extends('app')

@section('content')
	
	<a href="/invBangunan/create" class="btn btn-success pull-right">Tambah Inventaris Bangunan</a>

	<h1>Daftar Inventaris Bangunan</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tanah</th>
				<th>Kode/Nama/Alamat</th>
				<th>Tahun</th>
				<th>IMB</th>
				<th>Asal</th>
				<th>Fisik/Material</th>
				<th>Nilai Asset (Rp)</th>
				<th style="width:100px;">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($invBangunans as $b)
			<tr>
				<td><strong>{{ $b->tanah->kode }}</strong><br />{{ $b->tanah->nama }}</td>
				<td>
					<strong>{{ $b->kode }}</strong><br />
					{{ $b->nama }}<br />
					{{ $b->alamat }}
				</td>
				<td>
					<strong>Pembangunan:</strong> {{ $b->tahun_pembangunan }}<br />
					<strong>Selesai:</strong> {{ $b->tahun_selesai }}<br />
					<strong>Pakai:</strong> {{ $b->tahun_pakai }}
				</td>
				<td>
					<strong>Nomor:</strong> {{ $b->nomor_imb }}<br />
					<strong>Tanggal:</strong> {{ $b->tgl_imb }}
				</td>
				<td>
					<strong>Perolehan:</strong> {{ $b->asal_perolehan }}<br />
					<strong>Dana:</strong>{{ $b->asal_dana }}<br />
					<strong>No. Bukti Perolehan:</strong>{{ $b->nomor_bukti_perolehan }}<br />
					<strong>Rekanan:</strong>{{ $b->rekanan }}<br />
				</td>
				
				<td>
					<strong>Luas:</strong> {{ $b->luas }} m<sup>2</sup><br />
					<strong>Jumlah Lantai:</strong> {{ $b->jumlah_lantai }}<br />
					<strong>Lantai:</strong> {{ $b->material_lantai }}<br />
					<strong>Tembok:</strong>{{ $b->material_tembok }}<br />
					<strong>Atap:</strong>{{ $b->material_atap }}<br />
					<strong>Kondisi:</strong>{{ $b->kondisi }}
				</td>
				<td>{{ number_format($b->nilai_asset, 0, ',', '.') }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'invBangunan/'.$b->id]) !!}
		        		<a href="/invBangunan/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $invBangunans->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop