<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormWawancaraOrangTuaCalonSantriRequest;
use App\JawabanWawancaraOrangtuaCalonSantri;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FormWawancaraOrangTuaCalonSantri;
use Request;

class FormWawancaraOrangTuaCalonSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formWawancaraOrangtuaCalonSantri.index', [
            'formWawancaraOrangtuaCalonSantris' => FormWawancaraOrangtuaCalonSantri::orderBy('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formWawancaraOrangtuaCalonSantri.create', ['formWawancaraOrangtuaCalonSantri' => new FormWawancaraOrangtuaCalonSantri]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormWawancaraOrangtuaCalonSantriRequest $request)
    {
        $formWawancaraOrangtuaCalonSantri = FormWawancaraOrangtuaCalonSantri::create($request->all());

        foreach ($request->jawaban as $i => $j) {
            $formWawancaraOrangtuaCalonSantri->jawaban()->create($j);
        }

        return redirect('/form-wawancara-orangtua');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FormWawancaraOrangtuaCalonSantri $formWawancaraOrangtuaCalonSantri)
    {
        return view('formWawancaraOrangtuaCalonSantri.show', ['formWawancaraOrangtuaCalonSantri' => $formWawancaraOrangtuaCalonSantri]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormWawancaraOrangtuaCalonSantri $formWawancaraOrangtuaCalonSantri)
    {
        return view('formWawancaraOrangtuaCalonSantri.edit', ['formWawancaraOrangtuaCalonSantri' => $formWawancaraOrangtuaCalonSantri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormWawancaraOrangtuaCalonSantriRequest $request,
    FormWawancaraOrangtuaCalonSantri $formWawancaraOrangtuaCalonSantri)
    {
        $formWawancaraOrangtuaCalonSantri->update($request->all());

        $ids = [];

        foreach ($request->jawaban as $i => $j) {
            if ($jawaban = JawabanWawancaraOrangtuaCalonSantri::where('id', $i)->where('pertanyaan_id', $formWawancaraOrangtuaCalonSantri->id)->first()) {
                $jawaban->update($j);
                $ids[] = $i;
            } else {
                $jwb = $formWawancaraOrangtuaCalonSantri->jawaban()->create($j);
                $ids[] = $jwb->id;
            }
        }

        JawabanWawancaraOrangtuaCalonSantri::where('pertanyaan_id', $formWawancaraOrangtuaCalonSantri->id)->whereNotIn('id', $ids)->delete();

        return redirect('/form-wawancara-orangtua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormWawancaraOrangtuaCalonSantri $formWawancaraOrangtuaCalonSantri)
    {
        $formWawancaraOrangtuaCalonSantri->delete();
        JawabanWawancaraOrangtuaCalonSantri::where('pertanyaan_id', $formWawancaraOrangtuaCalonSantri->id)->delete();
        return redirect('/form-wawancara-orangtua');
    }
}
