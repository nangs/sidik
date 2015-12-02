@extends('app')

@section('content')
	
	<a href="/wali/create" class="btn btn-success pull-right">Tambah Orang Tua/Wali Siswa</a>

	<h1>Daftar Orang Tua/Wali Siswa</h1>
	<hr />

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat/Telp/Email</th>
				<th>Gender</th>
				<th>Hub. Kel.</th>
				<th>Tempat, Tgl Lahir/Umur</th>
				<th>Agama</th>
				<th>WN</th>
				<th>Pend. Terakhir</th>
				<th>Pekerjaan,<br />Penghasilan</th>
				<th>Status</th>
				<!-- <th>Sbg. Wali</th> -->
				<th style="width:100px;">Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($walis as $k)
			<tr>
				<td>{{ $k->nama }}</td>
				<td>
					<span class="fa fa-home"></span> {{ $k->alamat }}<br />
					<span class="fa fa-phone"></span> {{ $k->phone }}<br />
					<a href="mailto:{{ $k->email }}">{{ $k->email }}</a>
				</td>
				<td>{{ $k->jns_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ $k->hub_keluarga }}</td>
				<td>
					{{ $k->tempat_lahir }}<br />
					{{ $k->tgl_lahir }}<br />
					{{ $k->umur() }}
				</td>
				<td>{{ $k->agama }}</td>
				<td>{{ $k->wn }}</td>
				<td>{{ $k->pendidikan_terakhir }}</td>
				<td>
					{{ $k->pekerjaan }}<br />
					Rp. {{ number_format($k->penghasilan, 0, ',', '.') }}
				</td>
				<td>{{ $k->status ? 'Hidup' : 'Meninggal' }}</td>
				<!-- <td>{{ $k->is_wali ? 'Ya' : 'Tidak' }}</td> -->
				<td>
					{!! Form::open(['method' => 'DELETE', 'url' => 'wali/'.$k->id]) !!}
		        		<a href="/wali/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
	        		{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $walis->render() !!}

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop