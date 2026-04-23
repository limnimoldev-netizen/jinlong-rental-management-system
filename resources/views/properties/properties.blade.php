@extends('layouts.app')

@section('content')

<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-bold">Properties</h1>

        <button class="bg-primary text-secondary px-4 py-2 rounded-lg">
            + Add New
        </button>
    </div>

    <div class="grid grid-cols-4 gap-4 mb-6">

        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
            <p class="text-sm text-gray-500">Total Units</p>
            <h2 class="text-2xl font-bold">13</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-green-500">
            <p class="text-sm text-gray-500">Rented Units</p>
            <h2 class="text-2xl font-bold">8</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-yellow-500">
            <p class="text-sm text-gray-500">Vacant Units</p>
            <h2 class="text-2xl font-bold">5</h2>
        </div>

        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-red-500">
            <p class="text-sm text-gray-500">Expiring Soon</p>
            <h2 class="text-2xl font-bold">1</h2>
        </div>

    </div>

    <form method="POST" action="/properties" class="bg-white p-4 rounded-lg shadow mb-6">
        @csrf

        <div class="grid grid-cols-3 gap-4">

            <input type="text" name="name" placeholder="Property Name"
                class="border px-3 py-2 rounded-lg">

            <input type="text" name="address" placeholder="Address"
                class="border px-3 py-2 rounded-lg">

            <input type="text" name="description" placeholder="Description"
                class="border px-3 py-2 rounded-lg">

        </div>

        <button class="mt-4 bg-primary text-secondary px-4 py-2 rounded-lg">
            Add Property
        </button>
    </form>

    <div class="bg-white p-4 rounded-lg shadow">

        <table class="w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Address</th>
                    <th class="px-4 py-2 text-left">Description</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="px-4 py-2">No data yet</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

@endsection