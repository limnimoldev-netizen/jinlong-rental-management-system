<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller

{
    public function index()
    {
        $properties = Property::all();

        return view('properties.properties', compact('properties'));
    }

    public function store(Request $request)
    {
        Property::create([
            'name' => $request->name,
            'type' => $request->type,
            'status' => $request->status,
            'units' => $request->units,
        ]);

        return redirect('/properties');
    }

    public function show($id)
    {
        $property = Property::find($id);

        return view('properties.show', compact('property'));
    }

};






