@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-[26px] font-bold">Tenants</h1>

        <a href="/tenants/create" class="bg-blue-500 text-secondary px-4 py-2 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i>
            Add New
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <!-- Total Tenants Card -->
        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl shadow-lg p-6 text-blue-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-users text-2xl text-blue-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-700 text-sm font-medium">Total</p>
                    <h2 class="text-3xl font-bold">3</h2>
                </div>
            </div>
            <p class="text-blue-600 text-xs mt-2 opacity-80">All tenants</p>
        </div>

        <!-- Active Tenants Card -->
        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-xl shadow-lg p-6 text-green-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-user-check text-2xl text-green-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-green-700 text-sm font-medium">Active</p>
                    <h2 class="text-3xl font-bold">2</h2>
                </div>
            </div>
            <p class="text-green-600 text-xs mt-2 opacity-80">Currently active</p>
        </div>

        <!-- Pending Tenants Card -->
        <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl shadow-lg p-6 text-yellow-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-clock text-2xl text-yellow-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-yellow-700 text-sm font-medium">Pending</p>
                    <h2 class="text-3xl font-bold">1</h2>
                </div>
            </div>
            <p class="text-yellow-600 text-xs mt-2 opacity-80">Awaiting approval</p>
        </div>

        <!-- Total Properties Card -->
        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl shadow-lg p-6 text-purple-800 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-building text-2xl text-purple-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-purple-700 text-sm font-medium">Properties</p>
                    <h2 class="text-3xl font-bold">2</h2>
                </div>
            </div>
            <p class="text-purple-600 text-xs mt-2 opacity-80">With tenants</p>
        </div>

    </div>

    <div class="bg-white p-3 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Tenants List</h3>
            <input type="text" id="search" placeholder="Search tenants..." class="px-3 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2 text-left w-1/6">Tenant</th>
                        <th class="px-3 py-2 text-left w-1/6">Contact</th>
                        <th class="px-3 py-2 text-left w-1/8">Property</th>
                        <th class="px-3 py-2 text-left w-1/8">Unit</th>
                        <th class="px-3 py-2 text-left w-1/8">Lease Start</th>
                        <th class="px-3 py-2 text-left w-1/8">Lease End</th>
                        <th class="px-3 py-2 text-left w-1/8">Status</th>
                        <th class="px-3 py-2 text-left w-1/8">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-b hover:bg-gray-50">
                    <td class="px-3 py-2">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/tenans1.png') }}" alt="John Doe" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="font-medium text-sm">John Doe</div>
                                <div class="text-gray-500 text-xs">ID: T001</div>
                            </div>
                        </div>
                    </td>
                    
                    <td class="px-3 py-2">
                        <div class="text-xs">
                            <div class="text-xs">john.doe@email.com</div>
                            <div class="text-gray-500 text-xs">+1 234-567-8900</div>
                        </div>
                    </td>
                    
                    <td class="px-3 py-2 text-sm">Boardman Main House</td>
                    <td class="px-3 py-2 text-sm">A-101</td>
                    <td class="px-3 py-2 text-sm">Jan 1, 2024</td>
                    <td class="px-3 py-2 text-sm">Dec 31, 2024</td>
                    <td class="px-3 py-2">
                        <span class="inline-block px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-3 py-2">
                        <div class="flex gap-1">
                            <a href="/tenants/1" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                            <a href="/tenants/1/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                        <form action="/tenants/1" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash text-sm"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <tr class="border-b">
                    <td class="px-4 py-2">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/tenans2.png') }}" alt="Jane Smith" class="w-10 h-10 rounded-full object-cover">
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
                    <td class="px-3 py-2">
                        <div class="flex gap-1">
                            <a href="/tenants/2" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                            <a href="/tenants/2/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="/tenants/2" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

                <tr class="border-b">
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
                    <td class="px-3 py-2">
                        <div class="flex gap-1">
                            <a href="/tenants/3" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                            <a href="/tenants/3/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="/tenants/3" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

                @if(empty($tenants ?? []))
                <tr>
                    <td colspan="  6" class="text-center py-4 text-gray-400">
                        No data yet
                    </td>
                </tr>
                @endif

            </tbody>

        </table>

        
    </div>

</div>

@endsection
