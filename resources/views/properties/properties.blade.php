@extends('layouts.app')

@section('content')

    <h1>Properties Page</h1>

    <form action="{{ route('properties.store') }}" method="POST">
        @csrf

        <input type="text" name="name"placeholder="Name"class="border p-2 mb-2">

        <input type="tel" name="phone" placeholder="Phone number" class="border p-2 mb-2">

        <button type="submit" class="bg-green-500 text-white p-2">
            Submit
        </button>

</form>

@endsection 

