<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('units.index', compact('units'));
    }

        public function store(Request $request){
            
            $property_id= $request->input('property_id');
            $unit_number= $request->input('unit_number');
            $price= $request->input('price');
            $status= $request->input('status');

             Unit:: created([

                'property_id'=>$property_id,
                'unit_number'=>$unit_number,
                'price'=>$price,
                'status'=>$status,

            ]);

            return redirect() -> route('unit');

        }

};
