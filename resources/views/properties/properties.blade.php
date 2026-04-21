<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Property</title>
</head>
<body>
    <h1 class="bg-blue-400 text-xl p-20 ">
       
        
        <form action="{{ route('properties.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="name" value="">
            <input type="phone" placeholder="phone number" >

            <button type="submit">Go Go submit</button>
        </form>


    </h1>
    
    
</body>
</html>

