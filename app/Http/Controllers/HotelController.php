<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $hotel = Hotel::all();
           return view('table_hotel', compact('hotel'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name_hotel' => 'required|string',
            'description' => 'required|string',
            'name_room' => 'required|string',
            'price' => 'required|string',
            'number_bed' => 'required|string',
            'max_adult' => 'required|string',
            'max_child' => 'required|string',
            'attributes' => 'required|string',
            'statut' => 'required|boolean',
            // Add more validation rules as needed
        ]);

        Hotel::create($validatedData);

        return redirect()->route('hotel.index')->with('success', 'Room created successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //

        //$hotel = Hotel::findOrFail();
        //return view('hotel.show', compact('hotel'));

        return view('show', ['hotel' =>$hotel]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
        return view('edit',compact('hotel') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
        //

        $request->validate([
            'name_hotel' => 'required|string',
            'description' => 'required|string',
            'name_room' => 'required|string',
            'price' => 'required|string',
            'number_bed' => 'required|string',
            'max_adult' => 'required|string',
            'max_child' => 'required|string',
            'attributes' => 'required|string',
            'statut' => 'required|boolean',    ]);


        $hotel->update([
            'name_hotel' => $request->input('name_hotel'),
            'description' => $request->input('description'),
            'name_room' => $request->input('name_room'),
            'price' => $request->input('price'),
            'number_bed'=> $request->input('number_bed'),
            'max_adult'=> $request->input('max_adult'),
            'max_child'=> $request->input('max_child'),
            'attributes'=> $request->input('attributes'),
            'statut'=> $request->input('statut'),
            
        ]);

        
        return redirect()->route('hotel.index')->with('success', 'Chambre modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //

        $hotel->delete();
        return redirect()-> route('hotel.index');

    }
}
