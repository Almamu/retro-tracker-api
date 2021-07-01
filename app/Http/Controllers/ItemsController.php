<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Collection $collection)
    {
        return $collection->items;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request, Collection $collection)
    {
        $validated = $request->validate ([
            'name' => 'required|max:255'
        ]);

        $item = new Item ();

        $item->name = $validated ['name'];
        $item->collection_id = $collection->id;
        $item->barcode = null;
        $item->save ();

        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function show (Item $item)
    {
        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, Collection $collection, Item $item)
    {
        $validated = $request->validate ([
            'name' => 'required|max:255'
        ]);

        $item->name = $validated ['name'];
        $item->barcode = null;
        $item->save ();

        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Collection $collection, Item $item)
    {
        $item->delete ();
    }
}
