<?php

namespace App\Http\Controllers;

use App\Http\Requests\JamPelajaranRequest;
use App\Http\Controllers\Controller;
use App\JamPelajaran;

class JamPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jamPelajaran.index', ['jamPelajarans' => JamPelajaran::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jamPelajaran.create', ['jamPelajaran' => new JamPelajaran]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JamPelajaranRequest $request)
    {
        JamPelajaran::create($request->all());
        return redirect('/jamPelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JamPelajaran $jamPelajaran)
    {
        return view('jamPelajaran.show', ['jamPelajaran' => $jamPelajaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JamPelajaran $jamPelajaran)
    {
        return view('jamPelajaran.edit', ['jamPelajaran' => $jamPelajaran]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JamPelajaranRequest $request, JamPelajaran $jamPelajaran)
    {
        $jamPelajaran->update($request->all());
        return redirect('/jamPelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JamPelajaran $jamPelajaran)
    {
        $jamPelajaran->delete();
        return redirect('/jamPelajaran');
    }
}
