<div class="table-responsive">
	<table class="table table-striped grid" id="psb-list-{{$jenjang}}">
		<thead>
			<tr>
				<th data-orderable="false">#</th>
				<th>Calon Siswa</th>
				<th>JK</th>
				<th>Tingkat</th>
				<th>Pembayaran</th>
				<th>Formulir</th>
				<th>Berkas</th>
				<th>Test</th>
				<th>Wawancara</th>
				<th>Wawancara Orang Tua</th>
				<th>TKD</th>
				<th>Diterima</th>
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
					@if ($s->status_penerimaan)
					<span class="fa fa-check-square-o text-success"></span>
					@else
					<span class="fa fa-square-o text-danger"></span>
					@endif
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
