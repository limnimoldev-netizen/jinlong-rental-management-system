<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function index() {
        
        return view('units.store');

    }  
        public function store(Request $request){
            $name= $request->input('name');
            dd($request);
        }

};
