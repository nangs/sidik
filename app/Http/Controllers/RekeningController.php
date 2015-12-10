<?php

namespace App\Http\Controllers;

use App\Http\Requests\RekeningRequest;
use App\Http\Controllers\Controller;
use App\Rekening;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekening.index', ['rekenings' => Rekening::orderBy('bank', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekening.create', ['rekening' => new Rekening]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RekeningRequest $request)
    {
        Rekening::create($request->all());
        return redirect('/rekening');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rekening $rekening)
    {
        return view('rekening.show', ['rekening' => $rekening]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekening $rekening)
    {
        return view('rekening.edit', ['rekening' => $rekening]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RekeningRequest $request, Rekening $rekening)
    {
        $rekening->update($request->all());
        return redirect('/rekening');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekening $rekening)
    {
        $rekening->delete();
        return redirect('/rekening');
    }
}
