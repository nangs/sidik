<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PsbRequest;
use App\Http\Controllers\Controller;
use App\Psb;

class PsbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('psb.index', ['psbs' => Psb::orderBy('tanggal_pendaftaran', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('psb.create', ['psb' => new Psb]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PsbRequest $request)
    {
        Psb::create($request->all());
        return redirect('/psb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Psb $psb)
    {
        return view('psb.show', ['psb' => $psb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Psb $psb)
    {
        return view('psb.edit', ['psb' => $psb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PsbRequest $request, Psb $psb)
    {
        $psb->update($request->all());
        return redirect('/psb');
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
        return redirect('/psb');
    }

    public function getAmbilFormulir()
    {
    	return view('psb.ambilForm');
    }

    public function postAmbilFormulir()
    {
    	// save data
    	return view('psb.statusBayar');
    }
}
