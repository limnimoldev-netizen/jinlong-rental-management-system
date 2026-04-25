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
            
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Active</p>
            
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Vacant</p>
            
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-4 border-[#9b8384]">
            <p class="text-sm text-gray-500">Total Units</p>
            
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

            

        </table>

    </div>

</div>

@endsection