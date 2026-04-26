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

    public function edit($id)
    {
        $property = Property::find($id);

        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        
        $property->update([
            'name' => $request->name,
            'type' => $request->type,
            'status' => $request->status,
            'units' => $request->units,
        ]);

        return redirect('/properties/' . $id);
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect('/properties');
    }

};






