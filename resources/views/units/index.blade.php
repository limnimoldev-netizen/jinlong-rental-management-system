@extends('layouts.app')

@section('content')

<div class="p-6">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center gap-4">
                
                <div>
                    <h1 class="text-[26px] font-bold">Units</h1>
                    <p class="text-gray-500 text-sm">Unit Management</p>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="/units/create" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <i class="fas fa-plus"></i>
                    Add New 
                </a>
                
            </div>
        </div>
        
    </div>

    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Property</label>
                <select class="w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">All Properties</option>
                    <option value="1">Boardman Main House</option>
                    <option value="2">Boardman Annex</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">All Status</option>
                    <option value="available">Available</option>
                    <option value="occupied">Occupied</option>
                    <option value="maintenance">Maintenance</option>
                    <option value="reserved">Reserved</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <input type="text" placeholder="Search units..." class="w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Unit</th>
                        <th class="px-4 py-2 text-left">Property</th>
                        <th class="px-4 py-2 text-left">Type</th>
                        <th class="px-4 py-2 text-left">Bedrooms</th>
                        <th class="px-4 py-2 text-left">Bathrooms</th>
                        <th class="px-4 py-2 text-left">Size</th>
                        <th class="px-4 py-2 text-left">Price</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium">A-101</td>
                        <td class="px-4 py-2">Boardman Main House</td>
                        <td class="px-4 py-2">Apartment</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">850 sq ft</td>
                        <td class="px-4 py-2">$1,200.00</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="/units/1" class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            <a href="/units/1/edit" class="text-green-500 hover:text-green-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 font-medium">A-102</td>
                        <td class="px-4 py-2">Boardman Main House</td>
                        <td class="px-4 py-2">Apartment</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">650 sq ft</td>
                        <td class="px-4 py-2">$900.00</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                Occupied
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="/units/2" class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            <a href="/units/2/edit" class="text-green-500 hover:text-green-600 flex items-center gap-1">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            <button class="text-red-500 hover:text-red-600 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection