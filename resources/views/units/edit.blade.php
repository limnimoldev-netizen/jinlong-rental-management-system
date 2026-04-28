@extends('layouts.app')

@section('content')

<div class="p-6">
    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/units" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">Edit Unit {{ $unit->unit_number ?? $unit->id }}</h1>
        </div>
        <div class="flex gap-2">
            <a href="/units/{{ $unit->id }}" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                <i class="fas fa-save"></i>
                Save Changes
            </a>
        </div>
    </div>

    <!-- EDIT FORM -->
    <div class="bg-white rounded-lg shadow p-6">
        <form action="/units/{{ $unit->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Property</label>
                    <select name="property_id" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        <option value="">Select Property</option>
                        <option value="1" {{ $unit->property_id == 1 ? 'selected' : '' }}>Boardman Main House</option>
                        <option value="2" {{ $unit->property_id == 2 ? 'selected' : '' }}>Boardman Annex</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Unit Number</label>
                    <input type="text" name="unit_number" value="{{ $unit->unit_number ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                    <select name="type" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        <option value="">Select Type</option>
                        <option value="apartment" {{ $unit->type == 'apartment' ? 'selected' : '' }}>Apartment</option>
                        <option value="house" {{ $unit->type == 'house' ? 'selected' : '' }}>House</option>
                        <option value="studio" {{ $unit->type == 'studio' ? 'selected' : '' }}>Studio</option>
                        <option value="condo" {{ $unit->type == 'condo' ? 'selected' : '' }}>Condominium</option>
                        <option value="townhouse" {{ $unit->type == 'townhouse' ? 'selected' : '' }}>Townhouse</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Bedrooms</label>
                    <input type="number" name="bedrooms" value="{{ $unit->bedrooms ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Bathrooms</label>
                    <input type="number" name="bathrooms" value="{{ $unit->bathrooms ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Square Feet</label>
                    <input type="number" name="square_feet" value="{{ $unit->square_feet ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                    <input type="number" name="price" value="{{ $unit->price ?? '' }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required step="0.01">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        <option value="available" {{ $unit->status == 'available' ? 'selected' : '' }}>Available</option>
                        <option value="occupied" {{ $unit->status == 'occupied' ? 'selected' : '' }}>Occupied</option>
                        <option value="maintenance" {{ $unit->status == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                        <option value="reserved" {{ $unit->status == 'reserved' ? 'selected' : '' }}>Reserved</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm p-2">{{ $unit->description ?? '' }}</textarea>
                </div>
                
                <div>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_furnished" class="border-gray-300 rounded shadow-sm" {{ $unit->is_furnished ? 'checked' : '' }}>
                        <span class="text-sm font-medium text-gray-700">Is Furnished</span>
                    </label>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg flex items-center gap-2">
                    <i class="fas fa-save"></i>
                    Update Unit
                </button>
            </div>
        </form>
    </div>

</div>

@endsection
