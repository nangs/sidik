<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagsBukuRequest;
use App\Http\Controllers\Controller;
use App\TagsBuku;

class TagsBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tagsBuku.index', ['tagsBukus' => TagsBuku::orderBy('nama', 'ASC')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tagsBuku.create', ['tagsBuku' => new TagsBuku]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsBukuRequest $request)
    {
        TagsBuku::create($request->all());
        return redirect('/tagsBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TagsBuku $tagsBuku)
    {
        return view('tagsBuku.show', ['tagsBuku' => $tagsBuku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TagsBuku $tagsBuku)
    {
        return view('tagsBuku.edit', ['tagsBuku' => $tagsBuku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsBukuRequest $request, TagsBuku $tagsBuku)
    {
        $tagsBuku->update($request->all());
        return redirect('/tagsBuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagsBuku $tagsBuku)
    {
        $tagsBuku->delete();
        return redirect('/tagsBuku');
    }
}
