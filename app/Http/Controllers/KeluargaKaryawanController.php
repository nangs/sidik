<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeluargaKaryawanRequest;
use App\Http\Controllers\Controller;
use App\KeluargaKaryawan;
use Request;

class KeluargaKaryawanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluargaKaryawan = new KeluargaKaryawan;
        $keluargaKaryawan->karyawan_id = Request::get('karyawan_id');
        return view('keluargaKaryawan.create', ['keluargaKaryawan' => $keluargaKaryawan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeluargaKaryawanRequest $request)
    {
        $d = KeluargaKaryawan::create($request->all());
        return redirect('/karyawan/'.$d->karyawan_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KeluargaKaryawan $keluargaKaryawan)
    {
        return view('keluargaKaryawan.edit', ['keluargaKaryawan' => $keluargaKaryawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KeluargaKaryawanRequest $request, KeluargaKaryawan $keluargaKaryawan)
    {
        $keluargaKaryawan->update($request->all());
        return redirect('karyawan/'.$keluargaKaryawan->karyawan_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeluargaKaryawan $keluargaKaryawan)
    {
        $karyawan_id = $keluargaKaryawan->karyawan_id;
        $keluargaKaryawan->delete();
        return redirect('karyawan/'.$karyawan_id);
    }
}
