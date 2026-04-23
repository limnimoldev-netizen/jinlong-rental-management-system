<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Property</title>
</head>
<body class="font-sans">
    @extends('layouts.app')

    @section('content')

    <div class=" container p-6 banner">
    
        <div class="flex justify-between items-end mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Property Overview</h1>
                <p class="text-gray-500 text-sm">Manage and monitor your real estate portfolio</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50">
                    Export Report
                </button>
                <button class="bg-primary text-[#f6f4f0] px-4 py-2 rounded-lg text-sm font-medium shadow-sm hover:opacity-90">
                    + Add Property
                </button>
            </div>
        </div>

      
    </div>

    @endsection
</body>
</html>