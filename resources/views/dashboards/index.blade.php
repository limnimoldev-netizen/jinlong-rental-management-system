@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-[28px] font-bold text-gray-800">Dashboard</h1>
            <p class="text-gray-500 text-sm">Welcome to your rental management system</p>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative">
                <input type="text" placeholder="Quick search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg w-80 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-bell"></i>
                Notifications
            </button>
            <a href="/settings" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg flex items-center gap-2">
                <i class="fas fa-cog"></i>
                Settings
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/20 p-4 rounded-xl">
                    <i class="fas fa-building text-3xl text-blue-100"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-100 text-sm font-medium">Total</p>
                    <h2 class="text-4xl font-bold text-white">4</h2>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="bg-blue-100/20 px-3 py-2 rounded-lg">
                    <i class="fas fa-chart-line text-sm"></i>
                    <span class="text-blue-100 text-xs">+12% this month</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/20 p-4 rounded-xl">
                    <i class="fas fa-users text-3xl text-green-100"></i>
                </div>
                <div class="text-right">
                    <p class="text-green-100 text-sm font-medium">Total</p>
                    <h2 class="text-4xl font-bold text-white">3</h2>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="bg-green-100/20 px-3 py-2 rounded-lg">
                    <i class="fas fa-user-plus text-sm"></i>
                    <span class="text-green-100 text-xs">+2 new</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/20 p-4 rounded-xl">
                    <i class="fas fa-door-open text-3xl text-blue-100"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-100 text-sm font-medium">Total</p>
                    <h2 class="text-4xl font-bold text-white">3</h2>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="bg-blue-100/20 px-3 py-2 rounded-lg">
                    <i class="fas fa-home text-sm"></i>
                    <span class="text-blue-100 text-xs">85% occupied</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/20 p-4 rounded-xl">
                    <i class="fas fa-dollar-sign text-3xl text-blue-100"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-100 text-sm font-medium">Revenue</p>
                    <h2 class="text-4xl font-bold text-white">$12.6k</h2>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="bg-blue-100/20 px-3 py-2 rounded-lg">
                    <i class="fas fa-arrow-up text-sm"></i>
                    <span class="text-blue-100 text-xs">+8% vs last month</span>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/20 p-4 rounded-xl">
                    <i class="fas fa-chart-line text-3xl text-blue-100"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-100 text-sm font-medium">Activity</p>
                    <h2 class="text-4xl font-bold text-white">24</h2>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="bg-blue-100/20 px-3 py-2 rounded-lg">
                    <i class="fas fa-clock text-sm"></i>
                    <span class="text-blue-100 text-xs">Last 7 days</span>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold text-gray-800">Recent Tenants</h3>
                <div class="flex gap-2">
                    <button class="text-blue-500 hover:text-blue-600 text-sm">
                        <i class="fas fa-filter mr-1"></i>
                        Filter
                    </button>
                    <button class="text-gray-500 hover:text-gray-700 text-sm">
                        <i class="fas fa-sort mr-1"></i>
                        Sort
                    </button>
                </div>
                <a href="/tenants" class="text-blue-500 hover:text-blue-600 text-sm font-medium">View All</a>
            </div>
            
            <div class="space-y-3">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/tenans1.png') }}" alt="John Doe" class="w-12 h-12 rounded-full object-cover ring-2 ring-blue-500">
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">John Doe</div>
                            <div class="text-sm text-gray-500">Unit A-101 • Active • $1,200/mo</div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="text-blue-500 hover:text-blue-600 p-2 rounded-lg">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button class="text-green-500 hover:text-green-600 p-2 rounded-lg">
                            <i class="fas fa-phone"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/tenans2.png') }}" alt="Jane Smith" class="w-12 h-12 rounded-full object-cover ring-2 ring-green-500">
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">Jane Smith</div>
                            <div class="text-sm text-gray-500">Unit B-201 • Active • $1,500/mo</div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="text-blue-500 hover:text-blue-600 p-2 rounded-lg">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button class="text-green-500 hover:text-green-600 p-2 rounded-lg">
                            <i class="fas fa-phone"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/house1.png') }}" alt="Mike Brown" class="w-12 h-12 rounded-full object-cover ring-2 ring-yellow-500">
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-yellow-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-800">Mike Brown</div>
                            <div class="text-sm text-gray-500">Unit C-301 • Pending • $2,500/mo</div>
                        </div>
                    </div>
                    
                    <div class="flex gap-2">
                        <button class="text-blue-500 hover:text-blue-600 p-2 rounded-lg">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button class="text-green-500 hover:text-green-600 p-2 rounded-lg">
                            <i class="fas fa-phone"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 flex justify-center">
                <a href="/tenants" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium flex items-center gap-2">
                    <i class="fas fa-users mr-2"></i>
                    View All Tenants
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Quick Actions</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/tenants/create" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-user-plus text-xl"></i>
                    <div>
                        <div class="font-medium">Add New Tenant</div>
                        <div class="text-blue-100 text-xs">Register tenant</div>
                    </div>
                </a>
                
                <a href="/units/create" class="bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-home-plus text-xl"></i>
                    <div>
                        <div class="font-medium">Add New Unit</div>
                        <div class="text-green-100 text-xs">Create unit</div>
                    </div>
                </a>
                
                <a href="/properties/create" class="bg-gradient-to-r from-purple-500 to-purple-600 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-building-plus text-xl"></i>
                    <div>
                        <div class="font-medium">Add New Property</div>
                        <div class="text-purple-100 text-xs">Register property</div>
                    </div>
                </a>
                
                <a href="/maintenance_requests/create" class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-tools-plus text-xl"></i>
                    <div>
                        <div class="font-medium">Maintenance</div>
                        <div class="text-yellow-100 text-xs">Request repair</div>
                    </div>
                </a>
                
                <a href="/payments/create" class="bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-4 rounded-xl flex items-center justify-center gap-3 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fas fa-dollar-sign-plus text-xl"></i>
                    <div>
                        <div class="font-medium">Payment</div>
                        <div class="text-red-100 text-xs">Record payment</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>

@endsection