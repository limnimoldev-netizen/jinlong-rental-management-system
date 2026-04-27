@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-4">
            <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                {{ substr($tenant->first_name, 0, 1) }}{{ substr($tenant->last_name, 0, 1) }}
            </div>
            <div>
                <h1 class="text-[26px] font-bold">Edit Tenant</h1>
                <p class="text-gray-500 text-sm">{{ $tenant->first_name }} {{ $tenant->last_name }}</p>
            </div>
        </div>
        <a href="/tenants/{{ $tenant->id }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center gap-2 transition">
            <i class="fas fa-eye"></i>
            View Tenant
        </a>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="/tenants/{{ $tenant->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                        <input type="text" name="first_name" value="{{ $tenant->first_name }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                        <input type="text" name="last_name" value="{{ $tenant->last_name }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ $tenant->email }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" name="phone" value="{{ $tenant->phone }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Property</label>
                        <select name="property_id" required
                                class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Property</option>
                            <option value="1" {{ $tenant->property_id == 1 ? 'selected' : '' }}>Boardman Main House</option>
                            <option value="2" {{ $tenant->property_id == 2 ? 'selected' : '' }}>Boardman Annex</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Unit</label>
                        <select name="unit_id" required
                                class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Unit</option>
                            <option value="1" {{ $tenant->unit_id == 1 ? 'selected' : '' }}>A-101</option>
                            <option value="2" {{ $tenant->unit_id == 2 ? 'selected' : '' }}>A-102</option>
                            <option value="3" {{ $tenant->unit_id == 3 ? 'selected' : '' }}>B-201</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Lease Start Date</label>
                        <input type="date" name="lease_start" value="{{ $tenant->lease_start ? $tenant->lease_start->format('Y-m-d') : '' }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Lease End Date</label>
                        <input type="date" name="lease_end" value="{{ $tenant->lease_end ? $tenant->lease_end->format('Y-m-d') : '' }}" required
                               class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
            </div>

            <div class="mt-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Monthly Rent</label>
                    <input type="number" name="monthly_rent" step="0.01" value="{{ $tenant->monthly_rent }}" required
                           class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" required
                            class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="active" {{ $tenant->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="pending" {{ $tenant->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="inactive" {{ $tenant->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Notes</label>
                    <textarea name="notes" rows="3"
                              class="w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ $tenant->notes ?? '' }}</textarea>
                </div>
            </div>
            
            <div class="mt-8 flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition">
                    <i class="fas fa-save mr-2"></i>
                    Update Tenant
                </button>
                <a href="/tenants/{{ $tenant->id }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-medium transition">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</div>

@endsection
