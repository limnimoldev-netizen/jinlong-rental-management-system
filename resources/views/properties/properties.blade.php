@extends('layouts.app')

@section('content')

<div class="p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-[26px] font-bold">Properties</h1>

        <a href="/properties/create" class="bg-primary text-secondary px-4 py-2 rounded-lg">
            + Add New
        </a>
    </div>

    <!-- CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Total Properties</p>
            
            <h2 class="text-2xl font-bold">{{ $properties->count() }}</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Active</p>
            <h2 class="text-2xl font-bold">
                {{ $properties->where('status','Active')->count() }}
            </h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Vacant</p>
            <h2 class="text-2xl font-bold">
                {{ $properties->where('status','Vacant')->count() }}
            </h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Total Units</p>
            <h2 class="text-2xl font-bold">
                {{ $properties->sum('units') }}
            </h2>
        </div>

    </div>

    <!-- TABLE -->
    <div class="bg-white p-4 rounded-lg shadow">

        <table class="w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Type</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Units</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($properties as $property)
                <tr class="border-b">

                    <td class="px-4 py-2 font-medium">{{ $property->name }}</td>
                    <td class="px-4 py-2">{{ $property->type }}</td>
                    <td class="px-4 py-2">{{ $property->status }}</td>
                    <td class="px-4 py-2">{{ $property->units }}</td>
                    <td class="px-4 py-2 flex gap-3">

                        <a href="/properties/{{ $property->id }}" class="text-blue-500">
                            View
                        </a>

                        <a href="/properties/{{ $property->id }}/edit" class="text-green-500">
                            Edit
                        </a>

                        <form action="/properties/{{ $property->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-500">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>
                @endforeach

                <!-- EMPTY STATE -->
                @if($properties->count() == 0)
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-400">
                        No data yet
                    </td>
                </tr>
                @endif

            </tbody>

        </table>

    </div>

</div>

@endsection