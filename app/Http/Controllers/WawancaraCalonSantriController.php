<?php

namespace App\Http\Controllers;

use App\Http\Requests\WawancaraCalonSantriRequest;
use App\Http\Controllers\Controller;
use App\WawancaraCalonSantri;
use App\NilaiWawancaraCalonSantri;

class WawancaraCalonSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WawancaraCalonSantriRequest $request)
    {
        // dd($request);
        WawancaraCalonSantri::create($request->all());

        foreach($request->wawancara as $i => $d) {
            $w = NilaiWawancaraCalonSantri::create($d);
        }

        return redirect('/psb/show/'.$w->siswa->psb->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
