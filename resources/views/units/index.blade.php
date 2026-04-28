@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-[26px] font-bold">Units</h1>

        <a href="/units/create" class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center gap-2">
            <i class="fas fa-plus"></i>
            Add New
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <div class="bg-gradient-to-br  rounded-xl shadow-lg p-6 text-blue-800 ">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-door-open text-2xl text-blue-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-blue-700 text-sm font-medium">Total</p>
                    <h2 class="text-3xl font-bold">3</h2>
                </div>
            </div>
            <p class="text-blue-600 text-xs mt-2 opacity-80">All units</p>
        </div>

        <div class="bg-gradient-to-br  rounded-xl shadow-lg p-6 text-green-800 ">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-check-circle text-2xl text-green-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-green-700 text-sm font-medium">Available</p>
                    <h2 class="text-3xl font-bold">2</h2>
                </div>
            </div>
            <p class="text-green-600 text-xs mt-2 opacity-80">Ready for rent</p>
        </div>

        <div class="bg-gradient-to-br  rounded-xl shadow-lg p-6 text-yellow-800 ">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-home text-2xl text-yellow-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-yellow-700 text-sm font-medium">Occupied</p>
                    <h2 class="text-3xl font-bold">1</h2>
                </div>
            </div>
            <p class="text-yellow-600 text-xs mt-2 opacity-80">Currently rented</p>
        </div>

        <div class="bg-gradient-to-br  rounded-xl shadow-lg p-6 text-red-800 ">
            <div class="flex items-center justify-between mb-4">
                <div class="bg-white/30 p-3 rounded-lg backdrop-blur-sm">
                    <i class="fas fa-tools text-2xl text-red-600"></i>
                </div>
                <div class="text-right">
                    <p class="text-red-700 text-sm font-medium">Maintenance</p>
                    <h2 class="text-3xl font-bold">0</h2>
                </div>
            </div>
            <p class="text-red-600 text-xs mt-2 opacity-80">Under repair</p>
        </div>

    </div>

    <div class="bg-white p-3 rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-2 text-left w-1/6">Unit</th>
                        <th class="px-3 py-2 text-left w-1/6">Property</th>
                        <th class="px-3 py-2 text-left w-1/8">Type</th>
                        <th class="px-3 py-2 text-left w-1/8">Details</th>
                        <th class="px-3 py-2 text-left w-1/8">Price</th>
                        <th class="px-3 py-2 text-left w-1/8">Status</th>
                        <th class="px-3 py-2 text-left w-1/8">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($units ?? [] as $unit)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-3 py-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/house1.png') }}" alt="{{ $unit->unit_number ?? 'Unit' }}" class="w-10 h-10 rounded-lg object-cover">
                                <div>
                                    <div class="font-medium text-sm">{{ $unit->unit_number ?? 'Unit A-101' }}</div>
                                    <div class="text-gray-500 text-xs">ID: {{ $unit->id ?? 'U001' }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 text-sm">{{ $unit->property->name ?? 'Boardman Main House' }}</td>
                        <td class="px-3 py-2 text-sm">{{ ucfirst($unit->type ?? 'apartment') }}</td>
                        <td class="px-3 py-2">
                            <div class="text-xs">
                                <div>{{ $unit->bedrooms ?? 2 }} Beds • {{ $unit->bathrooms ?? 1 }} Bath</div>
                                <div class="text-gray-500">{{ $unit->square_feet ?? 850 }} sqft</div>
                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <span class="font-medium text-green-600 text-sm">${{ number_format($unit->price ?? 1200, 0) }}/mo</span>
                        </td>
                        <td class="px-3 py-2">
                            <span class="inline-block px-2 py-1 rounded-full text-xs font-medium 
                                {{ $unit->status == 'available' ? 'bg-green-100 text-green-800' : 
                                   ($unit->status == 'occupied' ? 'bg-yellow-100 text-yellow-800' : 
                                   'bg-red-100 text-red-800') }}">
                                {{ ucfirst($unit->status ?? 'available') }}
                            </span>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex gap-1">
                                <a href="/units/{{ $unit->id ?? 1 }}" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                                <a href="/units/{{ $unit->id ?? 1 }}/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="/units/{{ $unit->id ?? 1 }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    @if(!($units ?? false) || $units->count() == 0)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-3 py-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/house1.png') }}" alt="Unit A-101" class="w-10 h-10 rounded-lg object-cover">
                                <div>
                                    <div class="font-medium text-sm">Unit A-101</div>
                                    <div class="text-gray-500 text-xs">ID: U001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 text-sm">Boardman Main House</td>
                        <td class="px-3 py-2 text-sm">Apartment</td>
                        <td class="px-3 py-2">
                            <div class="text-xs">
                                <div>2 Bedrooms • 1 Bath</div>
                                <div class="text-gray-500">850 sqft</div>
                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <span class="font-medium text-green-600 text-sm">$1,200/mo</span>
                        </td>
                        <td class="px-3 py-2">
                            <span class="inline-block px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex gap-1">
                                <a href="/units/1" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                                <a href="/units/1/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="/units/1" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-3 py-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/depat2.png') }}" alt="Unit B-201" class="w-10 h-10 rounded-lg object-cover">
                                <div>
                                    <div class="font-medium text-sm">Unit B-201</div>
                                    <div class="text-gray-500 text-xs">ID: U002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 text-sm">Boardman Annex</td>
                        <td class="px-3 py-2 text-sm">Apartment</td>
                        <td class="px-3 py-2">
                            <div class="text-xs">
                                <div>1 Bedroom • 1 Bath</div>
                                <div class="text-gray-500">650 sqft</div>
                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <span class="font-medium text-green-600 text-sm">$1,000/mo</span>
                        </td>
                        <td class="px-3 py-2">
                            <span class="inline-block px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Occupied
                            </span>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex gap-1">
                                <a href="/units/2" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                                <a href="/units/2/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="/units/2" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-3 py-2">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/house1.png') }}" alt="Unit C-301" class="w-10 h-10 rounded-lg object-cover">
                                <div>
                                    <div class="font-medium text-sm">Unit C-301</div>
                                    <div class="text-gray-500 text-xs">ID: U003</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-2 text-sm">Boardman Main House</td>
                        <td class="px-3 py-2 text-sm">Condominium</td>
                        <td class="px-3 py-2">
                            <div class="text-xs">
                                <div>3 Bedrooms • 2 Baths</div>
                                <div class="text-gray-500">1,200 sqft</div>
                            </div>
                        </td>
                        <td class="px-3 py-2">
                            <span class="font-medium text-green-600 text-sm">$2,500/mo</span>
                        </td>
                        <td class="px-3 py-2">
                            <span class="inline-block px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Maintenance
                            </span>
                        </td>
                        <td class="px-3 py-2">
                            <div class="flex gap-1">
                                <a href="/units/3" class="text-blue-500 hover:text-blue-600 p-1" title="View">
                                    <i class="fas fa-eye text-sm"></i>
                                </a>
                                <a href="/units/3/edit" class="text-green-500 hover:text-green-600 p-1" title="Edit">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="/units/3" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 p-1" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        
        
    </div>

</div>

@endsection
