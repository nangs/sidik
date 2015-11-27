<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiwayatKepegawaianRequest;
use App\Http\Controllers\Controller;
use App\RiwayatKepegawaian;
use Request;

class RiwayatKepegawaianController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riwayatKepegawaian = new RiwayatKepegawaian;
        $riwayatKepegawaian->karyawan_id = Request::get('karyawan_id');
        return view('riwayatKepegawaian.create', ['riwayatKepegawaian' => $riwayatKepegawaian]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiwayatKepegawaianRequest $request)
    {
        $d = RiwayatKepegawaian::create($request->all());
        return redirect('/karyawan/'.$d->karyawan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RiwayatKepegawaian $riwayatKepegawaian)
    {
        return view('riwayatKepegawaian.edit', ['riwayatKepegawaian' => $riwayatKepegawaian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RiwayatKepegawaianRequest $request, RiwayatKepegawaian $riwayatKepegawaian)
    {
        $riwayatKepegawaian->update($request->all());
        return redirect('karyawan/'.$riwayatKepegawaian->karyawan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatKepegawaian $riwayatKepegawaian)
    {
        $karyawan_id = $riwayatKepegawaian->karyawan_id;
        $riwayatKepegawaian->delete();
        return redirect('karyawan/'.$karyawan_id);
    }
}
