@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            
            <div>
                <h1 class="text-[26px] font-bold">Tenants</h1>
                <p class="text-gray-500 text-sm">Tenant Management</p>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="/tenants/create" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2 transition">
                <i class="fas fa-plus"></i>
                Add New
            </a>
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
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <input type="text" placeholder="Search tenants..." class="w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Tenant</th>
                        <th class="px-4 py-2 text-left">Contact</th>
                        <th class="px-4 py-2 text-left">Property</th>
                        <th class="px-4 py-2 text-left">Unit</th>
                        <th class="px-4 py-2 text-left">Lease Start</th>
                        <th class="px-4 py-2 text-left">Lease End</th>
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JD
                                </div>
                                <div>
                                    <div class="font-medium">John Doe</div>
                                    <div class="text-gray-500 text-sm">ID: T001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">
                            <div>
                                <div class="text-sm">john.doe@email.com</div>
                                <div class="text-gray-500 text-sm">+1 234-567-8900</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Boardman Main House</td>
                        <td class="px-4 py-2">A-101</td>
                        <td class="px-4 py-2">Jan 1, 2024</td>
                        <td class="px-4 py-2">Dec 31, 2024</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="/tenants/1" class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            <a href="/tenants/1/edit" class="text-green-500 hover:text-green-600 flex items-center gap-1">
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
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JS
                                </div>
                                <div>
                                    <div class="font-medium">Jane Smith</div>
                                    <div class="text-gray-500 text-sm">ID: T002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">
                            <div>
                                <div class="text-sm">jane.smith@email.com</div>
                                <div class="text-gray-500 text-sm">+1 234-567-8901</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Boardman Annex</td>
                        <td class="px-4 py-2">B-201</td>
                        <td class="px-4 py-2">Mar 15, 2024</td>
                        <td class="px-4 py-2">Mar 14, 2025</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="/tenants/2" class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            <a href="/tenants/2/edit" class="text-green-500 hover:text-green-600 flex items-center gap-1">
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
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                    MB
                                </div>
                                <div>
                                    <div class="font-medium">Mike Brown</div>
                                    <div class="text-gray-500 text-sm">ID: T003</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-2">
                            <div>
                                <div class="text-sm">mike.brown@email.com</div>
                                <div class="text-gray-500 text-sm">+1 234-567-8902</div>
                            </div>
                        </td>
                        <td class="px-4 py-2">Boardman Main House</td>
                        <td class="px-4 py-2">A-102</td>
                        <td class="px-4 py-2">Jun 1, 2024</td>
                        <td class="px-4 py-2">May 31, 2025</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="/tenants/3" class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                                <i class="fas fa-eye"></i>
                                View
                            </a>
                            <a href="/tenants/3/edit" class="text-green-500 hover:text-green-600 flex items-center gap-1">
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
