<?php

namespace App\Http\Controllers;

use App\Http\Requests\PengalamanKerjaRequest;
use App\Http\Controllers\Controller;
use App\PengalamanKerja;
use Request;

class PengalamanKerjaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengalamanKerja = new PengalamanKerja;
        $pengalamanKerja->karyawan_id = Request::get('karyawan_id');
        return view('pengalamanKerja.create', ['pengalamanKerja' => $pengalamanKerja]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengalamanKerjaRequest $request)
    {
        $d = PengalamanKerja::create($request->all());
        return redirect('/karyawan/'.$d->karyawan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PengalamanKerja $pengalamanKerja)
    {
        return view('pengalamanKerja.edit', ['pengalamanKerja' => $pengalamanKerja]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengalamanKerjaRequest $request, PengalamanKerja $pengalamanKerja)
    {
        $pengalamanKerja->update($request->all());
        return redirect('karyawan/'.$pengalamanKerja->karyawan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengalamanKerja $pengalamanKerja)
    {
        $karyawan_id = $pengalamanKerja->karyawan_id;
        $pengalamanKerja->delete();
        return redirect('karyawan/'.$karyawan_id);
    }
}
