<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeasiswaCalonSiswaRequest;
use App\Http\Controllers\Controller;
use App\BeasiswaCalonSiswa;

class BeasiswaCalonSiswaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeasiswaCalonSiswaRequest $request)
    {
        $beasiswa = BeasiswaCalonSiswa::create($request->all());
        return json_encode([
            'success'   => true,
            'message'   => 'Data berhasil ditambahkan',
            'data'      => $beasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeasiswaCalonSiswa $beasiswa)
    {
        $beasiswa->delete();

        return json_encode([
            'success'   => true,
            'message'   => 'Data berhasil dihapus'
        ]);
    }
}
