<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriBukuRequest;
use App\Http\Controllers\Controller;
use App\KategoriBuku;

class KategoriBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategoriBuku.index', ['kategoriBukus' => KategoriBuku::orderBy('kode', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriBuku.create', ['kategoriBuku' => new KategoriBuku]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriBukuRequest $request)
    {
        KategoriBuku::create($request->all());
        return redirect('/kategoriBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBuku $kategoriBuku)
    {
        return view('kategoriBuku.show', ['kategoriBuku' => $kategoriBuku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBuku $kategoriBuku)
    {
        return view('kategoriBuku.edit', ['kategoriBuku' => $kategoriBuku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KategoriBukuRequest $request, KategoriBuku $kategoriBuku)
    {
        $kategoriBuku->update($request->all());
        return redirect('/kategoriBuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriBuku $kategoriBuku)
    {
        $kategoriBuku->delete();
        return redirect('/kategoriBuku');
    }
}
