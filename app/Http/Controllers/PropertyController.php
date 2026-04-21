<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller

{

    public function index() {
        
        return view('properties.store');

    }  

        public function store(Request $request){
            $name= $request->input('name');
           dd($request);
        }



};