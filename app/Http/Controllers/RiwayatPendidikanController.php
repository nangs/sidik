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
        $r = Request::all();
        $riwayatPendidikan = new RiwayatPendidikan;
        $riwayatPendidikan->karyawan_id = isset ($r['karyawan_id']) ? $r['karyawan_id'] : 0;
        $riwayatPendidikan->siswa_id = isset ($r['siswa_id']) ? $r['siswa_id'] : 0;
        $riwayatPendidikan->formal = isset ($r['formal']) ? $r['formal'] : 0;

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
        
        $route = $d->karyawan_id > 0 
            ? '/karyawan/'.$d->karyawan_id 
            : '/siswa/'.$d->siswa_id;

        return redirect($route);
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

        $route = $riwayatPendidikan->karyawan_id > 0 
            ? '/karyawan/'.$riwayatPendidikan->karyawan_id 
            : '/siswa/'.$riwayatPendidikan->siswa_id;

        return redirect($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatPendidikan $riwayatPendidikan)
    {
        $route = $riwayatPendidikan->karyawan_id > 0 
            ? '/karyawan/'.$riwayatPendidikan->karyawan_id 
            : '/siswa/'.$riwayatPendidikan->siswa_id;

        $riwayatPendidikan->delete();

        return redirect($route);
    }
}