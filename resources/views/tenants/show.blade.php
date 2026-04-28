@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <a href="/tenants" class="text-gray-600 hover:text-gray-800">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-[26px] font-bold">{{ $tenant->first_name }} {{ $tenant->last_name }}</h1>
        </div>
        <div class="flex gap-2">
            <a href="/tenants/{{ $tenant->id }}/edit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Edit
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div>
                <div class="h-20 w-full relative rounded-lg overflow-hidden">
                    <img src="{{ asset('images/tenans' . ($tenant->id % 2 == 1 ? '1' : '2') . '.png') }}" alt="{{ $tenant->first_name }} {{ $tenant->last_name }}" 
                         class="w-full h-full object-cover">
                    
                    <div class="absolute top-4 right-4">
                        <span class="bg-{{ $tenant->status == 'active' ? 'green' : ($tenant->status == 'pending' ? 'yellow' : 'gray') }}-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst($tenant->status) }}
                        </span>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Tenant Details</h3>
                
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="font-medium">{{ $tenant->first_name }} {{ $tenant->last_name }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-medium">{{ $tenant->email }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Phone</p>
                        <p class="font-medium">{{ $tenant->phone }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Property</p>
                        <p class="font-medium">{{ $tenant->property->name ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Unit</p>
                        <p class="font-medium">{{ $tenant->unit->name ?? 'N/A' }}</p>
                    </div>
                    
                    <div>
                        <p class="text-sm text-gray-500">Monthly Rent</p>
                        <p class="font-medium text-green-600">${{ number_format($tenant->monthly_rent ?? 0, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex gap-3 mt-6 pt-6 border-t">
            <a href="/tenants/{{ $tenant->id }}/edit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                Edit Tenant
            </a>
            <form action="/tenants/{{ $tenant->id }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition" onclick="return confirm('Are you sure you want to delete this tenant?')">
                    Delete Tenant
                </button>
            </form>
            <a href="/tenants" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg transition">
                Back to Tenants
            </a>
        </div>
    </div>

</div>

@endsection
