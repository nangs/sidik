<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenjangRequest;
use App\Http\Controllers\Controller;
use App\Jenjang;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jenjang.index', ['jenjangs' => Jenjang::orderBy('id', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenjang.create', ['jenjang' => new Jenjang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenjangRequest $request)
    {
        Jenjang::create($request->all());
        return redirect('/jenjang');
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
    public function edit(Jenjang $jenjang)
    {
        return view('jenjang.edit', ['jenjang' => $jenjang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenjangRequest $request, Jenjang $jenjang)
    {
        $jenjang->update($request->all());
        return redirect('/jenjang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenjang $jenjang)
    {
        $jenjang->delete();
        return redirect('/jenjang');
    }
}
