<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller

{
    public function index()
    {

        $properties = Property::paginate(5);
        
        return view('properties.index', compact('properties'));

    }

    public function store(Request $request)
    {
        $name= $request->input('name');
        $type= $request->input('type');
        $status= $request->input('status');
        $units= $request->input('units');
        
            Property::create([
            'name' => $name,
            'type' => $type,
            'status' => $status,
            'units' => $units,
        ]);

        
        return redirect('/properties');

    }

    /**
     * Display the specified property.
     */
    public function show($id)
    {
        $property = Property::find($id);
        
        if (!$property) {
            return redirect('/properties')->with('error', 'Property not found');
        }
        
        return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified property.
     */
    public function edit($id)
    {
        $property = Property::find($id);
        
        if (!$property) {
            return redirect('/properties')->with('error', 'Property not found');
        }
        
        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified property in storage.
     */
    

    /**
     * Remove the specified property from storage.
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        
        if (!$property) {
            return redirect('/properties')->with('error', 'Property not found');
        }

        $property->delete();

        return redirect('/properties')->with('success', 'Property deleted successfully');
    }

};






