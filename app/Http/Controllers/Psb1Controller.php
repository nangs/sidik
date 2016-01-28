<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Psb;
use App\Ta;
use Response;
use DB;

class Psb1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('psb1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psb1.create', [
            'psb' => new Psb(['tanggal_daftar' => date('Y-m-d')])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Psb::create($request->all());
        return Response::json([
            'success'   => true,
            'message'   => 'Data berhasil disimpan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Psb $psb)
    {
        return view('psb1.show', ['psb' => $psb, 'calonSiswa' => $psb->calonSiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Psb $psb)
    {
        return view('psb1.edit', ['psb' => $psb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psb $psb)
    {
        $psb->update($request->all());
        return Response::json([
            'success'   => true,
            'message'   => 'Data berhasil disimpan'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psb $psb)
    {
        $psb->delete();
        return Response::json([
            'success'   => true,
            'message'   => 'Data berhasil dihapus'
        ], 200);
    }

    public function data(Request $request)
    {
        $psb = Psb::where('calon_siswa.nama', 'like', '%'.$request->get('nama', '').'%')
                ->join('calon_siswa', 'calon_siswa.psb_id', '=', 'psb.id')
                ->orderBy($request->get('sort', 'calon_siswa.nama'), $request->get('order', 'asc'))
                ->paginate($request->rows)->toArray();

        return Response::json(['total' => $psb['total'], 'rows' => $psb['data']], 200);
    }

    public function report(Request $request)
    {
        $ta = Ta::active()->first()->periode;
        $daftarPalingAwal = Psb::where('tahun_ajaran', $ta)->orderBy('tanggal_daftar', 'ASC')->first();
        $awal = $daftarPalingAwal ? $daftarPalingAwal->tanggal_daftar : date('Y-m-d');

        // params
        $bindings = [
            'start' => $request->get('start',$awal),
            'stop'  => $request->get('stop', date('Y-m-d')),
            'ta'    => $ta
        ];

        $query = "select jenjang j, tingkat t, count(psb.id) total, cs.jenis_kelamin jk,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 1 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as daftar_extern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 1 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as daftar_intern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 2 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as bayar_extern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 2 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as bayar_intern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 3 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as isi_form_extern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 3 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as isi_form_intern,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 4 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as form_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 5 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as berkas_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 6 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as test_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 7 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as wawancara_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 8 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as wawancara_ortu_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 9 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as tkd_ok,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 10 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as diterima,
            (select count(psb.id) from psb join calon_siswa cs1 on cs1.psb_id = psb.id where tingkat=t and cs1.jenis_kelamin=jk and status_progress >= 11 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as ditolak
            from psb join calon_siswa cs on psb.id = cs.psb_id where tanggal_daftar between ':start' and ':stop'  and tahun_ajaran = ':ta' group by tingkat, cs.jenis_kelamin";

        $queryFooter = "select count(id) total,
            (select count(id) from psb where status_progress >= 1 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as daftar_extern,
            (select count(id) from psb where status_progress >= 1 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as daftar_intern,
            (select count(id) from psb where status_progress >= 2 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as bayar_extern,
            (select count(id) from psb where status_progress >= 2 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as bayar_intern,
            (select count(id) from psb where status_progress >= 3 and tanggal_daftar between ':start' and ':stop' and intern = 0 and tahun_ajaran = ':ta') as isi_form_extern,
            (select count(id) from psb where status_progress >= 3 and tanggal_daftar between ':start' and ':stop' and intern = 1 and tahun_ajaran = ':ta') as isi_form_intern,
            (select count(id) from psb where status_progress >= 4 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as form_ok,
            (select count(id) from psb where status_progress >= 5 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as berkas_ok,
            (select count(id) from psb where status_progress >= 6 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as test_ok,
            (select count(id) from psb where status_progress >= 7 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as wawancara_ok,
            (select count(id) from psb where status_progress >= 8 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as wawancara_ortu_ok,
            (select count(id) from psb where status_progress >= 9 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as tkd_ok,
            (select count(id) from psb where status_progress >= 10 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as diterima,
            (select count(id) from psb where status_progress >= 11 and tanggal_daftar between ':start' and ':stop' and tahun_ajaran = ':ta') as ditolak
            from psb where tanggal_daftar between ':start' and ':stop'  and tahun_ajaran = ':ta'";

        // harusnya gini
        // $data = DB::select(DB::raw($query, [
        //     'start' => $request->get('start','2015-12-21'),
        //     'stop'  => $request->get('stop', date('Y-m-d')),
        //     'ta'    => Ta::active()->first()->periode
        // ]));

        $data = DB::select(DB::raw(str_replace(
            [':start', ':stop', ':ta'],
            [
                $request->get('start', $awal),
                $request->get('stop', date('Y-m-d')),
                $ta
            ], $query)
        ));

        // dd($data);

        $dataFooter = DB::select(DB::raw(str_replace(
            [':start', ':stop', ':ta'],
            [
                $request->get('start', $awal),
                $request->get('stop', date('Y-m-d')),
                $ta
            ], $queryFooter)
        ));

        // dd($dataFooter[0]);

        return view('psb1.report', [
            'data' => $data,
            'dataFooter' => $dataFooter[0],
            'awal' => $awal,
            'ta' => $ta
        ]);
    }
}
