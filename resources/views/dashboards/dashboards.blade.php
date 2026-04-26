@extends('layouts.app')

@section('content')

<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold">
                <i class="fas fa-chart-line text-xl"></i>
            </div>
            <div>
                <h1 class="text-[26px] font-bold">Dashboard</h1>
                <p class="text-gray-500 text-sm">Rental Management System</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        
        <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/80 font-semibold">Total Properties</p>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-building text-white/60"></i>
                        <span class="text-2xl font-bold">024</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/80 font-semibold">Active Units</p>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-home text-white/60"></i>
                        <span class="text-2xl font-bold">024</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-purple-400 to-pink-500 text-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/80 font-semibold">Vacant Units</p>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-door-open text-white/60"></i>
                        <span class="text-2xl font-bold">024</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-red-400 to-red-600 text-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/80 font-semibold">Total Tenants</p>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users text-white/60"></i>
                        <span class="text-2xl font-bold">024</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-indigo-400 to-blue-600 text-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-white/80 font-semibold">Monthly Revenue</p>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-dollar-sign text-white/60"></i>
                        <span class="text-2xl font-bold">$033.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Recent Activity</h2>
            <button class="text-blue-500 hover:text-blue-600 text-sm">View All</button>
        </div>
        
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 border-b">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-plus text-green-600"></i>
                    </div>
                    <div>
                        <p class="font-medium">New Property Added</p>
                        <p class="text-sm text-gray-500">Boardman Main House</p>
                        <p class="text-xs text-gray-400">2 hours ago</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-3 border-b">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-edit text-blue-600"></i>
                    </div>
                    <div>
                        <p class="font-medium">Property Updated</p>
                        <p class="text-sm text-gray-500">Sunset Apartment</p>
                        <p class="text-xs text-gray-400">5 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection