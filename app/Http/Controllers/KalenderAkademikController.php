<?php

namespace App\Http\Controllers;

use App\Http\Requests\KalenderAkademikRequest;
use App\Http\Controllers\Controller;
use App\KalenderAkademik;
use Request;

class KalenderAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kalenderAkademik.index', ['kalenderAkademiks' => KalenderAkademik::orderBy('dari', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kalenderAkademik.create', ['kalenderAkademik' => new KalenderAkademik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KalenderAkademikRequest $request)
    {
        KalenderAkademik::create($request->all());
        return redirect('/kalenderAkademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KalenderAkademik $kalenderAkademik)
    {
        return view('kalenderAkademik.show', ['kalenderAkademik' => $kalenderAkademik]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KalenderAkademik $kalenderAkademik)
    {
        return view('kalenderAkademik.edit', ['kalenderAkademik' => $kalenderAkademik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KalenderAkademikRequest $request, KalenderAkademik $kalenderAkademik)
    {
        $kalenderAkademik->update($request->all());
        return redirect('/kalenderAkademik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KalenderAkademik $kalenderAkademik)
    {
        $kalenderAkademik->delete();
        return redirect('/kalenderAkademik');
    }

    public function kalender()
    {
        return view('kalenderAkademik.kalender');
    }

    public function event()
    {
        $r      = Request::all();
        $data   = KalenderAkademik::where('dari', '>', date('Y-m-d', $r['start']))
                    ->where('sampai', '<', date('Y-m-d', $r['end']))
                    ->get();

        $events = [];

        foreach($data as $d) {

            $events[] = [
                'title'     => $d->kegiatan,
                'start'     => $d->dari,
                'end'       => $d->sampai,
                'color'     => $d->warna,
                'allDay'    => true
            ];

        }

        return json_encode($events);
    }
}
