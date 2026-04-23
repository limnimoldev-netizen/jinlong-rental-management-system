<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{

    public function index() {
        
        return view('tenants.store');

    }  
        public function store(Request $request){
            $name= $request->input('name');
            dd($request);
        }

};