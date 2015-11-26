<?php

namespace App\Http\Controllers;

use App\Http\Requests\TingkatRequest;
use App\Http\Controllers\Controller;
use App\Tingkat;

class TingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tingkat.index', ['tingkats' => Tingkat::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tingkat.create', ['tingkat' => new Tingkat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TingkatRequest $request)
    {
        Tingkat::create($request->all());
        return redirect('/tingkat');
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
    public function edit(Tingkat $tingkat)
    {
        return view('tingkat.edit', ['tingkat' => $tingkat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TingkatRequest $request, Tingkat $tingkat)
    {
        $tingkat->update($request->all());
        return redirect('/tingkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tingkat $tingkat)
    {
        $tingkat->delete();
        return redirect('/tingkat');
    }
}
