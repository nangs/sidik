<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisInventarisRequest;
use App\Http\Controllers\Controller;
use App\JenisInventaris;

class JenisInventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jenisInventaris.index', ['jenisInventariss' => JenisInventaris::orderBy('kode', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisInventaris.create', ['jenisInventaris' => new JenisInventaris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenisInventarisRequest $request)
    {
        JenisInventaris::create($request->all());
        return redirect('/jenisInventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JenisInventaris $jenisInventaris)
    {
        return view('jenisInventaris.show', ['jenisInventaris' => $jenisInventaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisInventaris $jenisInventaris)
    {
        return view('jenisInventaris.edit', ['jenisInventaris' => $jenisInventaris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenisInventarisRequest $request, JenisInventaris $jenisInventaris)
    {
        $jenisInventaris->update($request->all());
        return redirect('/jenisInventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisInventaris $jenisInventaris)
    {
        $jenisInventaris->delete();
        return redirect('/jenisInventaris');
    }
}
