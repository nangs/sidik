<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisUjianRequest;
use App\Http\Controllers\Controller;
use App\JenisUjian;

class JenisUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jenisUjian.index', ['jenisUjians' => JenisUjian::orderBy('bobot', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisUjian.create', ['jenisUjian' => new JenisUjian]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisUjianRequest $request)
    {
        JenisUjian::create($request->all());
        return redirect('/jenisUjian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisUjian $jenisUjian)
    {
        return view('jenisUjian.show', ['jenisUjian' => $jenisUjian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisUjian $jenisUjian)
    {
        return view('jenisUjian.edit', ['jenisUjian' => $jenisUjian]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenisUjianRequest $request, JenisUjian $jenisUjian)
    {
        $jenisUjian->update($request->all());
        return redirect('/jenisUjian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisUjian $jenisUjian)
    {
        $jenisUjian->delete();
        return redirect('/jenisUjian');
    }
}
