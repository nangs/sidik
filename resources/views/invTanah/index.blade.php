@extends('app')

@section('content')
	
	<a href="/invTanah/create" class="btn btn-success pull-right">Tambah Inventaris Tanah</a>

	<h1>Daftar Inventaris Tanah</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Luas (m<sup>2</sup>)</th>
				<th>Lokasi</th>
				<th>Asal</th>
				<th>Sertifikat</th>
				<th>NJOP</th>
				<th>Tgl Dapat</th>
				<th>Nilai Asset (Rp)</th>
				<th style="width:100px;">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($invTanahs as $b)
			<tr>
				<td>{{ $b->kode }}</td>
				<td>{{ $b->nama }}</td>
				<td>
					<strong>Total:</strong> {{ $b->luas_total }}<br />
					<strong>Bangunan:</strong> {{ $b->luas_bangunan }}<br />
					<strong>Kosong:</strong> {{ $b->luas_kosong }}
				</td>
				<td>
					{{ $b->lokasi }}<br /><br />
					<strong>Batas Utara:</strong> {{ $b->batas_utara }}<br />
					<strong>Batas Selatan:</strong> {{ $b->batas_selatan }}<br />
					<strong>Batas Barat:</strong> {{ $b->batas_barat }}<br />
					<strong>Batas Timur:</strong> {{ $b->batas_timur }}<br />
				</td>
				<td>
					<strong>Perolehan:</strong> {{ $b->asal_perolehan }}<br />
					<strong>Dana:</strong>{{ $b->asal_dana }}
				</td>
				<td>
					<strong>Nomor:</strong> {{ $b->sertifikat_nomor }}<br />
					<strong>Tanggal:</strong> {{ $b->sertifikat_tgl }}<br />
					<strong>Hak:</strong> {{ $b->sertifikat_hak }}<br />
				</td>
				<td>{{ $b->njop }}</td>
				<td>{{ $b->tgl_dapat }}</td>
				<td>{{ number_format($b->nilai_asset, 0, ',', '.') }}</td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'invTanah/'.$b->id]) !!}
		        		<a href="/invTanah/{{ $b->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $invTanahs->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop