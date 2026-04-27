@extends('layouts.app')

@section('content')

<div class="p-6">
     
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/properties" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">{{ $property->name }}</h1>
        </div>
        <div class="flex gap-2">
            <a href="/properties/{{ $property->id }}/edit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <div class="h-20 w-full relative rounded-lg overflow-hidden">
                    <img src="{{ asset('images/house3.png') }}" alt="{{ $property->name }}" 
                         class="w-full h-full object-cover">
                    
                    <div class="absolute top-4 right-4">
                        <span class="bg-{{ $property->status == 'Active' ? 'green' : ($property->status == 'Vacant' ? 'yellow' : 'gray') }}-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $property->status }}
                        </span>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Property Details</h3>
                
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
                        <p class="font-medium">{{ $property->status }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Total Units</p>
                        <p class="font-medium">{{ $property->units }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Balance</p>
                        <p class="font-medium text-green-600">${{ number_format($property->balance ?? 0, 2) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Monthly Rent Min</p>
                        <p class="font-medium">${{ number_format($property->monthly_rent_min ?? 0, 2) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Monthly Rent Max</p>
                        <p class="font-medium">${{ number_format($property->monthly_rent_max ?? 0, 2) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Expected Revenue</p>
                        <p class="font-medium">${{ number_format($property->expected_monthly_revenue ?? 0, 2) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Year Built</p>
                        <p class="font-medium">{{ $property->year_built ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Description</p>
                        <p class="font-medium">{{ $property->description ?? 'Beautiful property with excellent amenities.' }}</p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>

</div>

@endsection