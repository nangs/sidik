<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagihanRequest;
use App\Http\Controllers\Controller;
use App\Tagihan;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tagihan.index', ['tagihans' => Tagihan::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tagihan.create', ['tagihan' => new Tagihan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagihanRequest $request)
    {
        Tagihan::create($request->all());
        return redirect('/tagihan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihan $tagihan)
    {
        return view('tagihan.show', ['tagihan' => $tagihan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tagihan $tagihan)
    {
        return view('tagihan.edit', ['tagihan' => $tagihan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagihanRequest $request, Tagihan $tagihan)
    {
        $tagihan->update($request->all());
        return redirect('/tagihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tagihan $tagihan)
    {
        $tagihan->delete();
        return redirect('/tagihan');
    }
}
