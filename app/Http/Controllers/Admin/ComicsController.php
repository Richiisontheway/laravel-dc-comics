<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//controllers
use App\Http\Controllers\Controller;
//models
use App\Models\Comic;
//request
use App\Http\Requests\Request\UpdateComicRequest;
use App\Http\Requests\Request\StoreComicRequest;
class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mi restituisce tutto ciò che c'è nella tabella collegata al model
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $validatedData = $request->validated();
        $comics_data = $validatedData->all();
        $comic = new Comic();
        $comic->title = $comics_data['title'];
        $comic->description = $comics_data['description'];
        $comic->thumb = $comics_data['thumb'];
        $comic->price = $comics_data['price'];
        $comic->series = $comics_data['series'];
        $comic->sale_date = $comics_data['sale_date'];
        $comic->type = $comics_data['type'];
        $comic->artist = $comics_data['artists'];
        $comic->writers = $comics_data['writers'];
        $comic->save();

         return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $validatedData = $request->validated();
        // $comicsData = $validatedData->all();

        // TODO: valido i dati, ma lo faremo in futuro

        $comic->update($validatedData);

        

        return redirect()->route('comics.index', ['comic' => $comic->id]);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
