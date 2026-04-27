<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    

    public function index()
    {
        $tenants = Tenant::all();
        return view('tenants.index', compact('tenants'));
    }
    
        public function store(Request $request){
            $name= $request->input('name');
            $phone= $request->input('phone');
            $email= $request->input('email');

            Tenant:: created([
                'name'=>$name,
                'phone'=>$phone,
                'email'=>$email,
            ]);

        
            return redirect() -> route('units');
        

        }

};