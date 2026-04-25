@extends('layouts.app')

@section('content')

<div class="p-6">

    <h1 class="text-xl font-bold mb-4">Add Property</h1>

    <form method="POST" action="/properties">
        @csrf

        <input name="name" placeholder="Name" class="border p-2 mb-2 w-full">
        <input name="type" placeholder="Type" class="border p-2 mb-2 w-full">
        <input name="status" placeholder="Status" class="border p-2 mb-2 w-full">
        <input name="units" placeholder="Units" class="border p-2 mb-2 w-full">

        <button class="bg-primary text-white px-4 py-2 rounded">
            Save
        </button>
    </form>

</div>

@endsection