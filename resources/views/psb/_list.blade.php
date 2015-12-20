<div class="table-responsive">
	<table class="table table-striped grid" id="psb-list-{{$jenjang}}">
		<thead>
			<tr>
				<th data-orderable="false">#</th>
				<th>Calon Siswa</th>
				<th>JK</th>
				<th>Tingkat</th>
				<th data-orderable="false">Pembayaran</th>
				<th data-orderable="false">Formulir</th>
				<th data-orderable="false">Berkas</th>
				<th data-orderable="false">Test</th>
				<th data-orderable="false">Wawancara</th>
				<th data-orderable="false">Wawancara Orang Tua</th>
				<th data-orderable="false">TKD</th>
				<th data-orderable="false">Diterima</th>
				@if (Auth::user()->role == 'admin')
				<th data-orderable="false">Aksi</th>
				@endif
			</tr>
		</thead>

		<tbody>
			@foreach ($psbs as $s)
			@if($jenjang == $s->jenjang)
			<tr>
				<td>
					{!! Form::radio('id', $s->id) !!}
				</td>
				<td>
					<a href="/psb/show/{{ $s->id }}">{{ $s->calonSiswa->nama }}</a>
				</td>
				<td>{{ $s->calonSiswa->jenis_kelamin == 1 ? 'L' : 'P' }}</td>
				<td>{{ App\Psb::TingkatList($s->tingkat) }}</td>
				<td>
					@if ($s->status_pembayaran)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_formulir)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_berkas)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_test)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_wawancara)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_wawancara_ortu)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_tkd)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
				<td>
					@if ($s->status_penerimaan == 1)
					<span class="fa fa-check-square-o text-success"></span>
					@elseif ($s->status_penerimaan == 2)
					<span class="fa fa-remove text-danger"></span>
					else
					<span class="fa fa-square-o"></span>
					@endif
				</td>
				<td>
					@if (Auth::user()->role == 'admin')
					<a href="/psb/edit/{{$s->id}}" class="">Edit</a> |
					<a href="/psb/delete/{{$s->id}}" class="tombol-hapus">Hapus</a>
					@endif
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
