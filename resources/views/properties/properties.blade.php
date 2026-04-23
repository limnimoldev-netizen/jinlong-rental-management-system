<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Property</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="  container p-6 banner">
    
        <div class="flex justify-between  mb-8">
            
            <div>
                <h1 class=" text-xl font-bold text-[#333]">Properties</h1>
                <p class="text-gray-500 text-sm">Manage and monitor your real estate portfolio</p>
            </div>

            <div class="flex gap-2">
                <button class="bg-white border  text-[#333] px-4 py-2 rounded-lg text-base font-medium ">
                    Export Report
                </button>
                <button class="bg-primary  px-3 py-2 rounded-lg text-white text-base font-medium shadow-sm ">
                    + Add Property
                </button>
                
            </div>
        </div>

    </div>

    @endsection
</body>
</html>