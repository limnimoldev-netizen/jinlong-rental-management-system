@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-[26px] font-bold">Properties</h1>

        <a href="/properties/create" class="bg-blue-500 text-secondary px-4 py-2 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i>
            Add New
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-gradient-to-br to-purple-200 rounded-xl shadow-lg p-6 text-black">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-building text-2xl text-blue-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-700 text-sm font-medium">Total</p>
                    <h2 class="text-3xl font-bold">{{ $properties->count() }}</h2>
                </div>
            </div>
            @if($properties->count() > 0)
                <p class="text-blue-600 text-xs mt-2 opacity-80">{{ $properties->first()->name }}</p>
            @endif
        </div>

        <div class="bg-gradient-to-br to-emerald-200 rounded-xl shadow-lg p-6 text-black">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-check-circle text-2xl text-emerald-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-emerald-700 text-sm font-medium">Active</p>
                    <h2 class="text-3xl font-bold">{{ $properties->where('status','Active')->count() }}</h2>
                </div>
            </div>
            @if($properties->where('status','Active')->count() > 0)
                <p class="text-emerald-600 text-xs mt-2 opacity-80">{{ $properties->where('status','Active')->first()->name }}</p>
            @endif
        </div>

        <div class="bg-gradient-to-br to-amber-200 rounded-xl shadow-lg p-6 text-black">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-home text-2xl text-amber-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-amber-700 text-sm font-medium">Vacant</p>
                    <h2 class="text-3xl font-bold">{{ $properties->where('status','Vacant')->count() }}</h2>
                </div>
            </div>
            @if($properties->where('status','Vacant')->count() > 0)
                <p class="text-amber-600 text-xs mt-2 opacity-80">{{ $properties->where('status','Vacant')->first()->name }}</p>
            @endif
        </div>

        <div class="bg-gradient-to-br to-rose-200 rounded-xl shadow-lg p-6 text-black">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-door-open text-2xl text-rose-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-rose-700 text-sm font-medium">Units</p>
                    <h2 class="text-3xl font-bold">{{ $properties->sum('units') }}</h2>
                </div>
            </div>
            <p class="text-rose-600 text-xs mt-2 opacity-80">Across all properties</p>
        </div>

    </div>

    <div class="bg-white p-3 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Properties List</h3>
            <input type="text" id="search" placeholder="Search properties..." class="px-3 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2 text-left w-1/4">Name</th>
                        <th class="px-3 py-2 text-left w-1/6">Type</th>
                        <th class="px-3 py-2 text-left w-1/6">Status</th>
                        <th class="px-3 py-2 text-left w-1/8">Units</th>
                        <th class="px-3 py-2 text-left w-1/6">Balance</th>
                        <th class="px-3 py-2 text-left w-1/8">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($properties as $property)
                    
                    <tr class="border-b hover:bg-gray-50">
                    <td class="px-3 py-2">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/house.png') }}" class="w-11 h-11 rounded object-cover" >
                            
                            <div>
                                <div class="font-medium text-sm">{{ $property->name }}</div>
                            </div>
                        </div>
                    </td>
                    
                    <td class="px-3 py-2">{{ $property->type }}</td>
                    <td class="px-3 py-2">
                        
                        <span class="inline-block px-2 py-1 rounded-full text-xs font-medium 
                            {{ $property->status == 'Active' ? 'bg-green-100 text-green-800' : 
                               ($property->status == 'Vacant' ? 'bg-yellow-100 text-yellow-800' : 
                               'bg-gray-100 text-gray-800') }}">
                            {{ $property->status }}
                        </span>
                        
                    </td>
                    <td class="px-3 py-2 text-center">{{ $property->units }}</td>
                    <td class="px-3 py-2">
                        <span class="font-medium text-green-600 text-sm">${{ number_format($property->balance ?? 0, 0) }}</span>
                    </td>
                    <td class="px-3 py-2">
                        <div class="flex gap-1">
                            <a href="/properties/{{ $property->id }}" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                <i class="fas fa-eye text-sm"></i>
                            </a>
                        <a href="/properties/{{ $property->id }}/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="/properties/{{ $property->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if($properties->count() == 0)
                <tr>
                    <td colspan="  6" class="text-center py-4 text-gray-400">
                        No data yet
                    </td>
                </tr>
                @endif

            </tbody>

        </table>

        <div class="mt-4">
            {{ $properties->links() }}
        </div>
    </div>

</div>

@endsection
