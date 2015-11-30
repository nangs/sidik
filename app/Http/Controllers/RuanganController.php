<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuanganRequest;
use App\Http\Controllers\Controller;
use App\Ruangan;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ruangan.index', ['ruangans' => Ruangan::orderBy('kode', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.create', ['ruangan' => new Ruangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuanganRequest $request)
    {
        Ruangan::create($request->all());
        return redirect('/ruangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        return view('ruangan.show', ['ruangan' => $ruangan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        return view('ruangan.edit', ['ruangan' => $ruangan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuanganRequest $request, Ruangan $ruangan)
    {
        $ruangan->update($request->all());
        return redirect('/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();
        return redirect('/ruangan');
    }
}
