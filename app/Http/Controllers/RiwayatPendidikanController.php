<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiwayatPendidikanRequest;
use App\Http\Controllers\Controller;
use App\RiwayatPendidikan;
use Request;

class RiwayatPendidikanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riwayatPendidikan = new RiwayatPendidikan;
        $riwayatPendidikan->karyawan_id = Request::get('karyawan_id');
        return view('riwayatPendidikan.create', ['riwayatPendidikan' => $riwayatPendidikan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiwayatPendidikanRequest $request)
    {
        $d = RiwayatPendidikan::create($request->all());
        return redirect('/karyawan/'.$d->karyawan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RiwayatPendidikan $riwayatPendidikan)
    {
        return view('riwayatPendidikan.edit', ['riwayatPendidikan' => $riwayatPendidikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RiwayatPendidikanRequest $request, RiwayatPendidikan $riwayatPendidikan)
    {
        $riwayatPendidikan->update($request->all());
        return redirect('karyawan/'.$riwayatPendidikan->karyawan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatPendidikan $riwayatPendidikan)
    {
        $karyawan_id = $riwayatPendidikan->karyawan_id;
        $riwayatPendidikan->delete();
        return redirect('karyawan/'.$karyawan_id);
    }
}