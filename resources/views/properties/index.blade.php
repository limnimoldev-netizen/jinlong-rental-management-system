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

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-500">Total Properties</p>
                <i class="fas fa-building text-gray-400"></i>
            </div>
           
            <h2 class="text-2xl font-bold">{{ $properties->count() }}</h2>

            @if($properties->count() > 0)
                <p class="text-xs text-gray-400 mt-1">{{ $properties->first()->name }}</p>
            @endif
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-500">Active</p>
                <i class="fas fa-check-circle text-green-400"></i>
            </div>
            
            <h2 class="text-2xl font-bold">
                {{ $properties->where('status','Active')->count() }}
            </h2>

            @if($properties->where('status','Active')->count() > 0)
                <p class="text-xs text-gray-400 mt-1">{{ $properties->where('status','Active')->first()->name }}</p>
            @endif

        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-500">Vacant</p>
                <i class="fas fa-home text-yellow-400"></i>
            </div>
            
            <h2 class="text-2xl font-bold">
                {{ $properties->where('status','Vacant')->count() }}
            </h2>

            @if($properties->where('status','Vacant')->count() > 0)
                <p class="text-xs text-gray-400 mt-1">{{ $properties->where('status','Vacant')->first()->name }}</p>
            @endif

        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-500">Total Units</p>
                <i class="fas fa-door-open text-blue-400"></i>
            </div>
            
            <h2 class="text-2xl font-bold">
                {{ $properties->sum('units') }}
            </h2>

            <p class="text-xs text-gray-400 mt-1">Across all properties</p>
        </div>

    </div>

    <div class="bg-white p-4 rounded-lg shadow">

        <table class="w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2  text-left ">Name</th>
                    <th class="px-4 py-2 text-left">Type</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Units</th>
                    <th class="px-4 py-2 text-left">Balance</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($properties as $property)
                
                <tr class="border-b">
                    <td class="px-4 py-2">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/house.png') }}" class="w-12 h-12 rounded-lg object-cover" >
                            
                            <div>
                                <div class="font-medium">{{ $property->name }}</div>
                            </div>
                        </div>
                    </td>
                    
                    <td class="px-4 py-2">{{ $property->type }}</td>
                    <td class="px-4 py-2">
                        
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium 
                            {{ $property->status == 'Active' ? 'bg-green-100 text-green-800' : 
                               ($property->status == 'Vacant' ? 'bg-yellow-100 text-yellow-800' : 
                               'bg-gray-100 text-gray-800') }}">
                            {{ $property->status }}
                        </span>
                        
                    </td>
                    <td class="px-4 py-2">{{ $property->units }}</td>
                    <td class="px-4 py-2">
                        <span class="font-medium text-green-600">${{ number_format($property->balance ?? 0, 2) }}</span>
                    </td>
                    <td class="px-4 py-2 flex gap-3">
                        <a href="/properties/{{ $property->id }}" class="text-blue-500 flex items-center gap-1">
                            <i class="fas fa-eye"></i>
                            View
                        </a>
                        <a href="/properties/{{ $property->id }}/edit" class="text-green-500 flex items-center gap-1">
                            <i class="fas fa-edit"></i>
                            Edit
                        </a>
                        <form action="/properties/{{ $property->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 flex items-center gap-1">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @if($properties->count() == 0)
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-400">
                        No data yet
                    </td>
                </tr>
                @endif

            </tbody>

        </table>

    </div>

</div>

@endsection