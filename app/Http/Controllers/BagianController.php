<?php

namespace App\Http\Controllers;

use App\Http\Requests\BagianRequest;
use App\Http\Controllers\Controller;
use App\Bagian;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bagian.index', ['bagians' => Bagian::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bagian.create', ['bagian' => new Bagian]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BagianRequest $request)
    {
        Bagian::create($request->all());
        return redirect('/bagian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bagian $bagian)
    {
        return view('bagian.show', ['bagian' => $bagian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bagian $bagian)
    {
        return view('bagian.edit', ['bagian' => $bagian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BagianRequest $request, Bagian $bagian)
    {
        $bagian->update($request->all());
        return redirect('/bagian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bagian $bagian)
    {
        $bagian->delete();
        return redirect('/bagian');
    }
}
