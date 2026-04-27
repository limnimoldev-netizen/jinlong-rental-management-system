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

        // return redirect() -> route('properties.properties');
        return redirect('/properties') ;

    }


};






