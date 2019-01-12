<?php

namespace App\Http\Controllers;

use App\Poem;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poems.index', ['poems' => Poem::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poem = Poem::create($request->all());

        return redirect()->route('poems.show', $poem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function show(Poem $poem)
    {
        return view('poems.show', ['poem' => $poem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function edit(Poem $poem)
    {
        return view('poems.edit', ['poem' => $poem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poem  $poem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poem $poem)
    {
        $poem->update($request->all());
        return redirect()->route('poems.show', $poem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poem $poem
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Poem $poem)
    {
        $poem->delete();
        return redirect()->route('poems.index');
    }
}
