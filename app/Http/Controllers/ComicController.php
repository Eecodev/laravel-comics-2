<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
//use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        // andiamo a prendere tutti i dati del form
        //prendo i dati del form dalla request

        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required|nullable',
            'price' => 'required|max:20',
            'sale_date' => 'required',
            'type' => 'required',

        ]);

        $formData = $request->all();
        // creao un nuovo prodotto
        // $new_comic = new Comic();
        // assegno i valori del form al nuovo prodotto
        // $new_comic->fill($formData);
        // salvo il nuovo prodotto
        // $new_comic->save();


        $new_comic = Comic::create($formData);
        // reindirizzo l'utente alla pagina del nuovo prodotto appena creato
        return to_route('comics.show', $new_comic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     *
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $formData = $request->all();
        // $comic->title = $formData['title'];
        // $comic->description = $formData["description"];
        // $comic->thumb = $formData["thumb"];
        // $comic->price = $formData["price"];
        // $comic->sale_date = $formData["sale_date"];
        // $comic->series = $formData["series"];
        // $comic->type = $formData["type"];

        $comic->fill($formData);
        $comic->update();
        return to_route('comics.index', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return to_route('comics.index')->with('message', "The item $comic->title deleted successfully");
    }
}
