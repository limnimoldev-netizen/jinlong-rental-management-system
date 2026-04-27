<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    

    public function index()
    {
        $tenants = Tenant::paginate(5);
        return view('tenants.index', compact('tenants'));
    }
    
        public function store(Request $request){
            $first_name= $request->input('first_name');
            $last_name= $request->input('last_name');
            $phone= $request->input('phone');
            $email= $request->input('email');
            $property_id= $request->input('property_id');
            $unit_id= $request->input('unit_id');
            $lease_start= $request->input('lease_start');
            $lease_end= $request->input('lease_end');
            $monthly_rent= $request->input('monthly_rent');
            $status= $request->input('status');
            $notes= $request->input('notes');

            Tenant::create([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone'=>$phone,
                'email'=>$email,
                'property_id'=>$property_id,
                'unit_id'=>$unit_id,
                'lease_start'=>$lease_start,
                'lease_end'=>$lease_end,
                'monthly_rent'=>$monthly_rent,
                'status'=>$status,
                'notes'=>$notes,
            ]);
        
            return redirect()->route('tenants');
        

    }
    
        public function show($id)
    {
        $tenant = Tenant::find($id);
        
        if (!$tenant) {
            return redirect('/tenants')->with('error', 'Tenant not found');
        }
        
        return view('tenants.show', compact('tenant'));
    }
    
    /**
     * Show the form for editing the specified tenant.
     */
    public function edit($id)
    {
        $tenant = Tenant::findOrFail($id);
        return view('tenants.edit', compact('tenant'));
    }
    
    /**
     * Update the specified tenant in storage.
     */
    
    /**
     * Remove the specified tenant from storage.
     */
    public function destroy($id)
    {
        $tenant = Tenant::find($id);
        
        if (!$tenant) {
            return redirect('/tenants')->with('error', 'Tenant not found');
        }

        $tenant->delete();

        return redirect('/tenants')->with('success', 'Tenant deleted successfully');
    }


};