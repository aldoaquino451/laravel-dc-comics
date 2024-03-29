<?php

namespace App\Http\Controllers;

use App\Models\Comic;
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
        // Salvo in una varibile l'array di dati che sono stati inseriti dentro al form
        $form_data = $request->all();

        // Creo una nuova istanza per il nuovo fumetto da aggiugnere
        $new_comic = new Comic();

        // Assegno per ogni proprietà di Comic il valore corrispondente del Form
        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];

        // Salvo la nuova istanza nel database
        $new_comic->save();

        // Restituisco direttamente la pagina con la lista di tutti i fumetti, compreso l'ultimo inserito
        // return redirect()->route('comics.index');

        // Restituisco solo la scheda del fumetto appena inserito
        // Vanno passato anche i dati del nuovo fumetto per poterli visualizzare
        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Salvo in una varibile l'array dei dati modificati e non tramite form
        $form_data = $request->all();

        // Riassegno per ogni proprietà di Comic il valore modificato
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];

        // Salvo le modfiche nel database
        $comic->save();

        // Restituisco la pagina dei dettagli
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Salvo il titolo in una variabile
        $title = $comic->title;

        // Prendo l'elemento che passo tramite action del form e applico il comando delete()
        $comic->delete();

        // Reindirizzo alla stessa pagina index
        return redirect()
            ->route('comics.index')
            ->with('deleted', "Il fumetto $title è stato eliminato");
    }
}
