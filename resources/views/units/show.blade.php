@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold">
                <i class="fas fa-home text-xl"></i>
            </div>
            <div>
                <h1 class="text-[26px] font-bold">Unit Details</h1>
                <p class="text-gray-500 text-sm">Unit Information</p>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="/units" class="text-blue-500 hover:text-blue-600 flex items-center gap-2">
                <i class="fas fa-arrow-left"></i>
                Back to Units
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Basic Information</h2>
            
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Unit Number</label>
                        <p class="text-lg font-medium">{{ $unit->unit_number }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Type</label>
                        <p class="text-lg font-medium">{{ $unit->type }}</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bedrooms</label>
                        <p class="text-lg font-medium">{{ $unit->bedrooms }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bathrooms</label>
                        <p class="text-lg font-medium">{{ $unit->bathrooms }}</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Square Feet</label>
                        <p class="text-lg font-medium">{{ $unit->getFormattedSize() }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <p class="text-lg font-medium">{{ $unit->getFormattedPrice() }}</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium 
                            {{ $unit->status == 'available' ? 'bg-green-100 text-green-800' : 
                               ($unit->status == 'occupied' ? 'bg-red-100 text-red-800' : 
                               ($unit->status == 'maintenance' ? 'bg-yellow-100 text-yellow-800' : 
                               ($unit->status == 'reserved' ? 'bg-blue-100 text-blue-800' : 
                               'bg-gray-100 text-gray-800') }}">
                            {{ ucfirst($unit->status) }}
                        </span>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Furnished</label>
                        <p class="text-lg font-medium">{{ $unit->is_furnished ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Property Information</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Property Name</label>
                    <p class="text-lg font-medium">{{ $unit->property->name }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Property Address</label>
                    <p class="text-lg font-medium">{{ $unit->property->address ?? 'N/A' }}</p>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Property Type</label>
                    <p class="text-lg font-medium">{{ $unit->property->type }}</p>
                </div>
            </div>
        </div>

        @if($unit->description)
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Description</h2>
            <p class="text-gray-600">{{ $unit->description }}</p>
        </div>
        @endif

        <div class="flex gap-3">
            <a href="/units/{{ $unit->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-edit"></i>
                Edit Unit
            </a>
            
            <form action="/units/{{ $unit->id }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                    <i class="fas fa-trash"></i>
                    Delete Unit
                </button>
            </form>
        </div>
    </div>

</div>

@endsection
