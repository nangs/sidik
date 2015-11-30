<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvBangunanRequest;
use App\Http\Controllers\Controller;
use App\InvBangunan;

class InvBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invBangunan.index', ['invBangunans' => InvBangunan::orderBy('kode', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invBangunan.create', ['invBangunan' => new InvBangunan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvBangunanRequest $request)
    {
        InvBangunan::create($request->all());
        return redirect('/invBangunan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InvBangunan $invBangunan)
    {
        return view('invBangunan.show', ['invBangunan' => $invBangunan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InvBangunan $invBangunan)
    {
        return view('invBangunan.edit', ['invBangunan' => $invBangunan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InvBangunanRequest $request, InvBangunan $invBangunan)
    {
        $invBangunan->update($request->all());
        return redirect('/invBangunan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvBangunan $invBangunan)
    {
        $invBangunan->delete();
        return redirect('/invBangunan');
    }
}
