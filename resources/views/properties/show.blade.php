@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/properties" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">Property Details</h1>
        </div>

        <div class="flex gap-2">
            <a href="/properties/{{ $property->id }}/edit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Basic Information</h3>
                
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-500">Property Name</p>
                        <p class="font-medium">{{ $property->name }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Type</p>
                        <p class="font-medium">{{ $property->type }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium 
                            {{ $property->status == 'Active' ? 'bg-green-100 text-green-800' : 
                               ($property->status == 'Vacant' ? 'bg-yellow-100 text-yellow-800' : 
                               'bg-gray-100 text-gray-800') }}">
                            {{ $property->status }}
                        </span>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Total Units</p>
                        <p class="font-medium">{{ $property->units }}</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Statistics</h3>
                
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-500">Occupied Units</p>
                        <p class="font-medium">0</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Vacant Units</p>
                        <p class="font-medium">{{ $property->units }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Occupancy Rate</p>
                        <p class="font-medium">0%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- UNITS SECTION -->
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Units</h3>
            <a href="/units/create?property_id={{ $property->id }}" class="bg-primary text-secondary px-4 py-2 rounded-lg">
                + Add Unit
            </a>
        </div>
        
        <div class="text-center py-8 text-gray-400">
            <p>No units added yet</p>
            <p class="text-sm mt-2">Click "Add Unit" to get started</p>
        </div>
    </div>

</div>

@endsection