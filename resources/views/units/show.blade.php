@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/units" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">{{ $unit->unit_number ?? 'Unit ' . $unit->id }}</h1>
        </div>
        <div class="flex gap-2">
            <a href="/units/{{ $unit->id }}/edit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <div class="h-20 w-full relative rounded-lg overflow-hidden">
                    <img src="{{ asset('images/house1.png') }}" alt="Unit {{ $unit->unit_number ?? $unit->id }}" 
                         class="w-full h-full object-cover">
                    
                    <div class="absolute top-4 right-4">
                        <span class="bg-{{ $unit->status == 'available' ? 'green' : ($unit->status == 'occupied' ? 'yellow' : 'red') }}-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst($unit->status) }}
                        </span>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Unit Details</h3>
                
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-500">Property</p>
                        <p class="font-medium">{{ $unit->property->name ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Unit Number</p>
                        <p class="font-medium">{{ $unit->unit_number ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Type</p>
                        <p class="font-medium">{{ ucfirst($unit->type) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Bedrooms</p>
                        <p class="font-medium">{{ $unit->bedrooms ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Bathrooms</p>
                        <p class="font-medium">{{ $unit->bathrooms ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Square Feet</p>
                        <p class="font-medium">{{ $unit->square_feet ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Price</p>
                        <p class="font-medium text-green-600">${{ number_format($unit->price ?? 0, 2) }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Status</p>
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium 
                            {{ $unit->status == 'available' ? 'bg-green-100 text-green-800' : 
                               ($unit->status == 'occupied' ? 'bg-yellow-100 text-yellow-800' : 
                               'bg-red-100 text-red-800') }}">
                            {{ ucfirst($unit->status) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex gap-3 mt-6 pt-6 border-t">
            <a href="/units/{{ $unit->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                Edit Unit
            </a>
            <form action="/units/{{ $unit->id }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition" onclick="return confirm('Are you sure you want to delete this unit?')">
                    <i class="fas fa-trash"></i>
                    Delete Unit
                </button>
            </form>
        </div>
    </div>

</div>

@endsection
