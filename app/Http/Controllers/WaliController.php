<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaliRequest;
use App\Http\Controllers\Controller;
use App\Wali;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wali.index', ['walis' => Wali::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wali.create', ['wali' => new Wali]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WaliRequest $request)
    {
        Wali::create($request->all());
        return redirect('/wali');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        return view('wali.show', ['wali' => $wali]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {
        return view('wali.edit', ['wali' => $wali]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WaliRequest $request, Wali $wali)
    {
        $wali->update($request->all());
        return redirect('wali/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        $wali->delete();
        return redirect('wali/');
    }
}
