<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaryawanRequest;
use App\Http\Controllers\Controller;
use App\Karyawan;
use Request;
use Auth;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index', [
            'karyawans' => Karyawan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create', ['karyawan' => new Karyawan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            
            $file = $request->file('img');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['foto'] = $fileName;

        }

        $k = Karyawan::create($data);
        $k->mapels()->sync($request->get('mapel', []));

        return redirect('/karyawan/'.$k->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryawanRequest $request, Karyawan $karyawan)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            
            $file = $request->file('img');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['foto'] = $fileName;

        }

        $karyawan->update($data);
        $karyawan->mapels()->sync($request->get('mapel', []));

        return redirect('karyawan/'.$karyawan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect('karyawan/');
    }
}
