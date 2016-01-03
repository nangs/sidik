@if ($psb->calonSiswa->wawancara)
<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <th style="width:170px;"> Total Nilai </th>
            <td> : {{ $psb->calonSiswa->nilaiWawancara->sum('nilai') }} </td>
        </tr>
        <tr>
            <th> Hasil Wawancara </th>
            <td> : {{ $psb->calonSiswa->wawancara->hasil_wawancara ? 'LULUS' : 'DIPERTIMBANGKAN' }} </td>
        </tr>
        <tr>
            <th> Catatan </th>
            <td> : {{ $psb->calonSiswa->wawancara->catatan }} </td>
        </tr>
    </tbody>
</table>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Indikator Variable</th>
            <th>Sub Indikator Variable</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach($psb->calonSiswa->nilaiWawancara as $w)
        <tr>
            <td> {{ $w->pertanyaan->indikator_variable }} </td>
            <td> {{ $w->pertanyaan->sub_indikator_variable }} </td>
            <td> {{ $w->pertanyaan->pertanyaan }} </td>
            <td> {{ $w->jawaban->jawaban }} </td>
            <td> {{ $w->nilai }} </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else

{!! Form::open(['url' => '/wawancara-calon-santri', 'method' => 'POST', 'class' => 'form-vertical']) !!}

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Indikator Variable</th>
            <th>Sub Indikator Variable</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\FormWawancaraCalonSantri::all() as $i => $p)
        <tr>
            <td> {{$p->indikator_variable}} </td>
            <td> {{$p->sub_indikator_variable}} </td>
            <td>
                {{$p->pertanyaan}}
                {!! Form::hidden('wawancara['.$i.'][siswa_id]', $psb->calonSiswa->id) !!}
                {!! Form::hidden('wawancara['.$i.'][pertanyaan_id]', $p->id) !!}
             </td>
            <td> {!! Form::select('wawancara['.$i.'][jawaban_id]', $p->jawaban->pluck('jwb', 'id'), null, ['class' => 'form-control']) !!} </td>
            <td>
                {!! Form::text('wawancara['.$i.'][nilai]', null, ['class' => 'form-control']) !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr />

{!! Form::hidden('siswa_id', $psb->calonSiswa->id) !!}
{!! Form::label('hasil_wawancara', 'Hasil Wawancara:', ['class' => 'col-md-2 control-label']) !!}
{!! Form::radio('hasil_wawancara', 1) !!} LULUS &nbsp; &nbsp;
{!! Form::radio('hasil_wawancara', 0) !!} DIPERTIMBANGKAN
<div class="clearfix"></div><br>
{!! Form::textarea('catatan', null, ['class' => 'form-control', 'placeholder' => 'Catatan', 'rows' => 3]) !!}

<hr />

<div class="text-center">
    {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}

@endif
