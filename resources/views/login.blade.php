<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex items-center justify-center"
      style="background: #f0e7d5;">

    <!-- SINGLE LOGIN BOX -->
    <div class="w-[400px] bg-white rounded-2xl shadow-lg p-8">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/logo.png') }}" class="w-14 h-14">
        </div>

        <h2 class="text-xl font-bold text-center mb-6">Login</h2>

        <form method="POST" action="/login" class="space-y-4">

            @csrf

            <input type="email"
                   name="email"
                   placeholder="Email"
                   class="w-full border rounded-lg px-3 py-2">

            <input type="password"
                   name="password"
                   placeholder="Password"
                   class="w-full border rounded-lg px-3 py-2">

            <button class="w-full bg-primary text-secondary py-2 rounded-lg font-semibold hover:opacity-90">
                Login
            </button>

        </form>

    </div>

</body>
</html>