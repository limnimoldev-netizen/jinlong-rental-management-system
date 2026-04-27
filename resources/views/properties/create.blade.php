@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/properties" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">Add New Property</h1>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <form method="POST" action="/properties">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Property Name
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Enter property name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Property Type
                    </label>
                    <select 
                        name="type" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                        <option value="">Select Type</option>
                        <option value="Apartment">Apartment</option>
                        <option value="House">House</option>
                        <option value="Condo">Condo</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Office">Office</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Status
                    </label>
                    <select 
                        name="status" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                        <option value="">Select Status</option>
                        <option value="Active">Active</option>
                        <option value="Vacant">Vacant</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Number of Units
                    </label>
                    <input 
                        type="number" 
                        name="units" 
                        placeholder="Enter number of units"
                        min="1"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>
                
            </div>
            
            <div class="flex justify-end gap-3 mt-8">
                <a href="/properties" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 text-secondary px-6 py-2 rounded-lg hover:bg-blue-600">
                    Create Property
                </button>
            </div>
            
        </form>
    </div>

</div>

@endsection