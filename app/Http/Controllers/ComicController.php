<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->genRules());
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $this_comic = Comic::findOrFail($id);
        return view('comics.show', compact('this_comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this_comic = Comic::findOrFail($id);
        return view('comics.edit', compact('this_comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate($this->genRules());

        $data = $request->all();
        $this_comic = Comic::findOrFail($id);        
        $this_comic->update($data);

        return redirect()->route('comics.show', ['comic' => $this_comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this_comic = Comic::findOrFail($id);        
        $this_comic->delete();

        return redirect()->route('comics.index');
    }

    private function genRules() {
        return [
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|numeric',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50'
        ];
    }
}


