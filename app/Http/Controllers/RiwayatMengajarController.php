<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiwayatMengajarRequest;
use App\Http\Controllers\Controller;
use App\RiwayatMengajar;
use Request;

class RiwayatMengajarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riwayatMengajar = new RiwayatMengajar;
        $riwayatMengajar->karyawan_id = Request::get('karyawan_id');
        return view('riwayatMengajar.create', ['riwayatMengajar' => $riwayatMengajar]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiwayatMengajarRequest $request)
    {
        $d = RiwayatMengajar::create($request->all());
        return redirect('/karyawan/'.$d->karyawan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RiwayatMengajar $riwayatMengajar)
    {
        return view('riwayatMengajar.edit', ['riwayatMengajar' => $riwayatMengajar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RiwayatMengajarRequest $request, RiwayatMengajar $riwayatMengajar)
    {
        $riwayatMengajar->update($request->all());
        return redirect('karyawan/'.$riwayatMengajar->karyawan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiwayatMengajar $riwayatMengajar)
    {
        $karyawan_id = $riwayatMengajar->karyawan_id;
        $riwayatMengajar->delete();
        return redirect('karyawan/'.$karyawan_id);
    }
}
