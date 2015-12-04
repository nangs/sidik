<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\KelasRequest;
// use App\Http\Requests\JadwalPelajaranRequest;
use App\Http\Controllers\Controller;
use App\JadwalPelajaran;
use App\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', ['kelass' => Kelas::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', ['kelas' => new Kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        Kelas::create($request->all());
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        return view('kelas.show', ['kelas' => $kelas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', ['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelasRequest $request, Kelas $kelas)
    {
        $kelas->update($request->all());
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('/kelas');
    }

    public function createJadwal(Kelas $kelas, Request $request)
    {
        return view('jadwalPelajaran.create', [
            'kelas'             => $kelas, 
            'jadwalPelajaran'   => new JadwalPelajaran
        ]);
    }

    public function editJadwal(Kelas $kelas)
    {
        return view('jadwalPelajaran.edit', [
            'kelas'             => $kelas, 
            'jadwalPelajaran'   => new JadwalPelajaran
        ]);
    }

    public function storeJadwal(Request $request, Kelas $kelas)
    {
        foreach ($kelas->tingkat->jamPelajarans as $jam) 
        {
            $jadwal = new JadwalPelajaran;
            $jadwal->ta_id      = $kelas->ta_id;
            $jadwal->jenjang_id = $kelas->jenjang_id;
            $jadwal->tingkat_id = $kelas->tingkat_id;
            $jadwal->kelas_id   = $kelas->id;
            $jadwal->hari       = $request->input('hari');
            $jadwal->jam_id     = $jam->id;
            $jadwal->mapel_id   = $request->input('mapel_id')[$jam->id];
            $jadwal->guru_id    = $request->input('guru_id')[$jam->id];
            $jadwal->ruang_id   = $request->input('ruang_id')[$jam->id];
            $jadwal->keterangan = $request->input('keterangan')[$jam->id];

            $jadwal->save();
        }

        return redirect('/kelas/'.$kelas->id);
    }

    public function updateJadwal(Request $request, Kelas $kelas)
    {
        foreach ($kelas->jadwalPelajarans as $jadwal) 
        {
            // $jadwal->ta_id      = $kelas->ta_id;
            // $jadwal->jenjang_id = $kelas->jenjang_id;
            // $jadwal->tingkat_id = $kelas->tingkat_id;
            // $jadwal->kelas_id   = $kelas->id;
            // $jadwal->hari       = $request->input('hari');
            // $jadwal->jam_id     = $jadwal->jam_id;
            $jadwal->mapel_id   = $request->input('mapel_id')[$jadwal->jam_id];
            $jadwal->guru_id    = $request->input('guru_id')[$jadwal->jam_id];
            $jadwal->ruang_id   = $request->input('ruang_id')[$jadwal->jam_id];
            $jadwal->keterangan = $request->input('keterangan')[$jadwal->jam_id];

            $jadwal->save();
        }

        return redirect('/kelas/'.$kelas->id);
    }

    public function addSiswa(Kelas $kelas)
    {
        return view('siswa.formPerKelas', ['kelas' => $kelas]);
    }

    public function saveSiswa(Request $request, Kelas $kelas)
    {
        $kelas->siswas()->sync($request->input('siswa'));
        return redirect('/kelas/'.$kelas->id);
    }
}
