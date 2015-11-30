<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvTanahRequest;
use App\Http\Controllers\Controller;
use App\InvTanah;

class InvTanahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invTanah.index', ['invTanahs' => InvTanah::orderBy('kode', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invTanah.create', ['invTanah' => new InvTanah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvTanahRequest $request)
    {
        InvTanah::create($request->all());
        return redirect('/invTanah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InvTanah $invTanah)
    {
        return view('invTanah.show', ['invTanah' => $invTanah]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InvTanah $invTanah)
    {
        return view('invTanah.edit', ['invTanah' => $invTanah]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvTanahRequest $request, InvTanah $invTanah)
    {
        $invTanah->update($request->all());
        return redirect('/invTanah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvTanah $invTanah)
    {
        $invTanah->delete();
        return redirect('/invTanah');
    }
}
