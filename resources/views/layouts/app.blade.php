
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Rental System</title>
</head>

<body class="bg-secondary">

    <x-navbar />

    <div class="flex">
        <x-sidebar />

        <div class="ml-64 p-6 w-full mt-16">
            @yield('content')
        </div>
    </div>

</body>
</html>