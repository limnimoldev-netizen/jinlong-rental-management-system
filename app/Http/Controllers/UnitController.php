<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(5);
        return view('units.index', compact('units'));
    }

    public function store(Request $request)
    {
        $property_id= $request->input('property_id');
        $unit_number= $request->input('unit_number');
        $type= $request->input('type');
        $bedrooms= $request->input('bedrooms');
        $bathrooms= $request->input('bathrooms');
        // $square_feet= $request->input('square_feet');
        // $price= $request->input('price');
        // $status= $request->input('status');
        // $description= $request->input('description');
        // $is_furnished= $request->input('is_furnished');

        Unit::create([
            'property_id'=>$property_id ?: null,
            'unit_number'=>$unit_number,
            'type'=>$type,
            'bedrooms'=>$bedrooms,
            'bathrooms'=>$bathrooms,
            // 'square_feet'=>$square_feet,
            // 'price'=>$price,
            // 'status'=>$status,
            // 'description'=>$description,
            // 'is_furnished'=>$is_furnished,
        ]);

        return redirect('/units');
    }

    /**
     * Display the specified unit.
     */
    public function show($id)
    {
        $unit = Unit::find($id);
        
        if (!$unit) {
            return redirect('/units')->with('error', 'Unit not found');
        }
        
        return view('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified unit.
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        
        if (!$unit) {
            return redirect('/units')->with('error', 'Unit not found');
        }
        
        return view('units.edit', compact('unit'));
    }

    /**
     * Update the specified unit in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $unit = Unit::find($id);
        
    //     if (!$unit) {
    //         return redirect('/units')->with('error', 'Unit not found');
    //     }

    //     $unit->property_id = $request->input('property_id');
    //     $unit->unit_number = $request->input('unit_number');
    //     $unit->type = $request->input('type');
    //     $unit->bedrooms = $request->input('bedrooms');
    //     $unit->bathrooms = $request->input('bathrooms');
    //     $unit->square_feet = $request->input('square_feet');
    //     $unit->description = $request->input('description');
    //     $unit->price = $request->input('price');
    //     $unit->status = $request->input('status');
    //     $unit->is_furnished = $request->has('is_furnished');
        
    //     $unit->save();

    //     return redirect('/units')->with('success', 'Unit updated successfully');
    // }

    /**
     * Remove the specified unit from storage.
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        
        if (!$unit) {
            return redirect('/units')->with('error', 'Unit not found');
        }

        $unit->delete();

        return redirect('/units')->with('success', 'Unit deleted successfully');
    }

};
