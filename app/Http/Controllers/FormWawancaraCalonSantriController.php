<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormWawancaraCalonSantriRequest;
use App\JawabanWawancaraCalonSantri;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FormWawancaraCalonSantri;
use Request;

class FormWawancaraCalonSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formWawancaraCalonSantri.index', [
            'formWawancaraCalonSantris' => FormWawancaraCalonSantri::orderBy('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formWawancaraCalonSantri.create', ['formWawancaraCalonSantri' => new FormWawancaraCalonSantri]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormWawancaraCalonSantriRequest $request)
    {
        $formWawancaraCalonSantri = FormWawancaraCalonSantri::create($request->all());

        foreach ($request->jawaban as $i => $j) {
            $formWawancaraCalonSantri->jawaban()->create($j);
        }

        return redirect('/form-wawancara-calon-santri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FormWawancaraCalonSantri $formWawancaraCalonSantri)
    {
        return view('formWawancaraCalonSantri.show', ['formWawancaraCalonSantri' => $formWawancaraCalonSantri]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FormWawancaraCalonSantri $formWawancaraCalonSantri)
    {
        return view('formWawancaraCalonSantri.edit', ['formWawancaraCalonSantri' => $formWawancaraCalonSantri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormWawancaraCalonSantriRequest $request,
    FormWawancaraCalonSantri $formWawancaraCalonSantri)
    {
        $formWawancaraCalonSantri->update($request->all());

        $ids = [];

        foreach ($request->jawaban as $i => $j) {
            if ($jawaban = JawabanWawancaraCalonSantri::where('id', $i)->where('pertanyaan_id', $formWawancaraCalonSantri->id)->first()) {
                $jawaban->update($j);
                $ids[] = $i;
            } else {
                $jwb = $formWawancaraCalonSantri->jawaban()->create($j);
                $ids[] = $jwb->id;
            }

        }

        JawabanWawancaraCalonSantri::where('pertanyaan_id', $formWawancaraCalonSantri->id)->whereNotIn('id', $ids)->delete();

        return redirect('/form-wawancara-calon-santri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormWawancaraCalonSantri $formWawancaraCalonSantri)
    {
        $formWawancaraCalonSantri->delete();
        JawabanWawancaraCalonSantri::where('pertanyaan_id', $formWawancaraCalonSantri->id)->delete();
        return redirect('/form-wawancara-calon-santri');
    }
}
