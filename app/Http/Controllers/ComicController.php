<?php

namespace App\Http\Controllers;

// alerady imported file
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $data = $request->all();

        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->cover_image = $data['cover_image'];
        // $comic->thumb2 = $data['thumb2'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];

        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
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
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $this->validation($request->all());

        $comic->update($form_data);

        return redirect()->route('comics.show', $comic->id);
    }

    // VALIDATOR !!
    private function validation($data)
    {
        $validator = Validator::make($data,
        
            [
                'title' => 'required | max:50',
                'description' => 'required',
                'thumb' => 'required',
                'cover_image' => 'required',
                'thumb2' => 'required',
                'price' => 'required | max:10',
                'series' => 'required | max:20',
                'sale_date' => 'required | max:10',
                'type' => 'required | max:20',
                'artists' => 'required',
                'writers' => 'required',
            ],

            [
                'title.required' => 'Title is required',
                'title.max' => 'Il titolo deve avere una lunghezza massima di :max caratteri',
                'description.required' => 'Description is required',
                'thumb.required' => 'Thumb is required',
                'cover_image.required' => 'Cover is required',
                'thumb2.required' => 'Second thumg is required',
                'price.required' => 'Price is required',
                'price.max' => 'Price requires :max characters',
                'series.required' => 'Series is required',
                'series.max' => 'Series requires :max charachteras',
                'sale_date.required' => 'Date is required',
                'sale_date.max' => 'Sale date requires :max charachters',
                'type.required' => 'Type is required',
                'type.max' => 'Type requires :max characters',
                'artists.required' => 'Artist are required',
                'writers.required' => 'Writers are required',
            ]
        
        )->validate();

        return $validator;
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
