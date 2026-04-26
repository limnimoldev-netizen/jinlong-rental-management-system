@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold">
                <i class="fas fa-home text-xl"></i>
            </div>
            <div>
                <h1 class="text-[26px] font-bold">Edit Unit</h1>
                <p class="text-gray-500 text-sm">Update unit information</p>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="/units" class="text-blue-500 hover:text-blue-600 flex items-center gap-2">
                <i class="fas fa-arrow-left"></i>
                Back to Units
            </a>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <form action="/units/{{ $unit->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Property</label>
                    <select name="property_id" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                        <option value="">Select Property</option>
                        @foreach($properties as $property)
                            <option value="{{ $property->id }}" {{ $unit->property_id == $property->id ? 'selected' : '' }}>
                                {{ $property->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Unit Number</label>
                    <input type="text" name="unit_number" value="{{ $unit->unit_number }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Type</label>
                    <input type="text" name="type" value="{{ $unit->type }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Bedrooms</label>
                    <input type="number" name="bedrooms" value="{{ $unit->bedrooms }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Bathrooms</label>
                    <input type="number" name="bathrooms" value="{{ $unit->bathrooms }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Square Feet</label>
                    <input type="number" name="square_feet" value="{{ $unit->square_feet }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                    <input type="number" name="price" value="{{ $unit->price }}" class="w-full border border-gray-300 rounded-md shadow-sm p-2" required step="0.01">
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
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-md shadow-sm p-2">{{ $unit->description ?? '' }}</textarea>
                </div>
                
                <div>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="is_furnished" {{ $unit->is_furnished ? 'checked' : '' }} class="border-gray-300 rounded shadow-sm">
                        <span class="text-sm font-medium text-gray-700">Is Furnished</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg flex items-center gap-2">
                    <i class="fas fa-save"></i>
                    Update Unit
                </button>
            </div>
        </form>
    </div>

</div>

@endsection
