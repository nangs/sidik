<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\Http\Controllers\Controller;
use App\Siswa;
use Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'siswas' => Siswa::where('nama', 'LIKE', '%'.Request::get('nama', '').'%')
                            // ->where('nis', 'LIKE', '%'.Request::get('nis', '').'%')
                            // ->where('nisn', 'LIKE', '%'.Request::get('nisn', '').'%')
                            // ->where('jns_kelamin', Request::get('jns_kelamin', 1))
                            ->orderBy('nama', 'ASC')
                            ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create', ['siswa' => new Siswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            
            $file = $request->file('img');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['foto'] = $fileName;

        }

        $siswa = Siswa::create($data);

        return redirect('/siswa/'.$siswa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.show', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, Siswa $siswa)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {
            
            $file = $request->file('img');
            
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('uploads', $fileName);

            $data['foto'] = $fileName;

        }

        $siswa->update($data);

        return redirect('/siswa/'.$siswa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect('/siswa');
    }
}
